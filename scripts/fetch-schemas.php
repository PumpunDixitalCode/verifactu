<?php

/**
 * Regenerates the local copy of the AEAT VeriFactu WSDL + XSDs in resources/wsdl.
 *
 * Why: ext/soap fails to import the remote xmldsig-core-schema.xsd (W3C) when
 * building the SoapClient ("Parsing Schema: can't import schema ... missing
 * 'targetNamespace'"), so VeriFactuRegistroFactura loads the WSDL from disk.
 *
 * What it does:
 *  - downloads the WSDL and every XSD it imports, recursively
 *  - rewrites schemaLocation/location to the local files
 *  - strips the DOCTYPE from xmldsig-core-schema.xsd, expanding its entities
 *
 * Usage (from the package root):
 *   php scripts/fetch-schemas.php [output-dir] [wsdl-url]
 *
 * output-dir defaults to resources/wsdl.
 * Run it again whenever AEAT publishes a new WSDL/XSD version, then commit resources/wsdl.
 * The SOAP endpoint is not taken from the WSDL: it is set in VeriFactuRegistroFactura
 * via __setLocation(), so the same WSDL works for test and production.
 */

const DEFAULT_WSDL = 'https://prewww2.aeat.es/static_files/common/internet/dep/aplicaciones/es/aeat/tikeV1.0/cont/ws/SistemaFacturacion.wsdl';

$outDir = $argv[1] ?? dirname(__DIR__) . '/resources/wsdl';
$wsdlUrl = $argv[2] ?? DEFAULT_WSDL;

if (!is_dir($outDir) && !mkdir($outDir, 0775, true)) {
    fwrite(STDERR, "Cannot create $outDir\n");
    exit(1);
}

/** url => local file name */
$names = [];
$queue = [];

function localNameFor(string $url, array &$names, array &$queue): string
{
    if (isset($names[$url])) {
        return $names[$url];
    }
    $base = basename(parse_url($url, PHP_URL_PATH) ?: 'file.xsd');
    $name = $base;
    $i = 1;
    while (in_array($name, $names, true)) {
        $name = pathinfo($base, PATHINFO_FILENAME) . '_' . $i++ . '.' . pathinfo($base, PATHINFO_EXTENSION);
    }
    $names[$url] = $name;
    $queue[] = $url;

    return $name;
}

function resolveUrl(string $base, string $rel): string
{
    if (preg_match('#^[a-z][a-z0-9+.-]*://#i', $rel)) {
        return $rel;
    }
    $p = parse_url($base);
    $root = $p['scheme'] . '://' . $p['host'] . (isset($p['port']) ? ':' . $p['port'] : '');
    $path = str_starts_with($rel, '/') ? $rel : preg_replace('#/[^/]*$#', '/', $p['path'] ?? '/') . $rel;

    $parts = [];
    foreach (explode('/', $path) as $seg) {
        if ($seg === '..') {
            array_pop($parts);
        } elseif ($seg !== '.') {
            $parts[] = $seg;
        }
    }

    return $root . implode('/', $parts);
}

function fetch(string $url): string
{
    $ctx = stream_context_create([
        'http' => ['timeout' => 30, 'user_agent' => 'verifactu-schema-fetch/1.0', 'ignore_errors' => true],
    ]);
    for ($try = 1; $try <= 3; $try++) {
        $body = @file_get_contents($url, false, $ctx);
        $code = 0;
        foreach ($http_response_header ?? [] as $h) {
            if (preg_match('#^HTTP/\S+\s+(\d+)#', $h, $m)) {
                $code = (int)$m[1]; // last status line wins (redirects)
            }
        }
        if ($body !== false && $code === 200 && str_starts_with(ltrim($body), '<')) {
            return $body;
        }
        fwrite(STDERR, "  attempt $try failed for $url (HTTP $code)\n");
        sleep(2);
    }
    throw new RuntimeException("Could not download $url");
}

/**
 * Removes the DOCTYPE block, expanding its general entities (&dsig;) and
 * returning the #FIXED xmlns:* attributes it declared so they can be re-added.
 */
function stripDoctype(string $xml, array &$fixedNs): string
{
    if (!preg_match('/<!DOCTYPE\b[^\[>]*(\[(.*?)\]\s*)?>/s', $xml, $m)) {
        return $xml;
    }
    $subset = $m[2] ?? '';

    preg_match_all('/<!ENTITY\s+(?!%)(\w+)\s+([\'"])(.*?)\2\s*>/s', $subset, $ents, PREG_SET_ORDER);
    preg_match_all('/(xmlns:\w+)\s+CDATA\s+#FIXED\s+([\'"])(.*?)\2/s', $subset, $attrs, PREG_SET_ORDER);
    foreach ($attrs as $a) {
        $fixedNs[$a[1]] = $a[3];
    }

    $xml = str_replace($m[0], '', $xml);
    foreach ($ents as $e) {
        $xml = str_replace('&' . $e[1] . ';', $e[3], $xml);
    }

    return $xml;
}

localNameFor($wsdlUrl, $names, $queue);

while ($url = array_shift($queue)) {
    $name = $names[$url];
    echo "Downloading $url -> $name\n";

    $fixedNs = [];
    $xml = stripDoctype(fetch($url), $fixedNs);

    $dom = new DOMDocument();
    $dom->preserveWhiteSpace = true;
    if (!$dom->loadXML($xml, LIBXML_NONET)) {
        throw new RuntimeException("Invalid XML in $url");
    }

    $root = $dom->documentElement;
    foreach ($fixedNs as $attr => $value) {
        if (!$root->hasAttribute($attr)) {
            $root->setAttributeNS('http://www.w3.org/2000/xmlns/', $attr, $value);
        }
    }

    $xpath = new DOMXPath($dom);
    // xs:import / xs:include / xs:redefine -> schemaLocation ; wsdl:import -> location
    foreach ($xpath->query('//*[@schemaLocation] | //*[local-name()="import"][@location]') as $node) {
        $attr = $node->hasAttribute('schemaLocation') ? 'schemaLocation' : 'location';
        $target = resolveUrl($url, trim($node->getAttribute($attr)));
        $node->setAttribute($attr, localNameFor($target, $names, $queue));
    }

    if ($dom->save(rtrim($outDir, '/\\') . DIRECTORY_SEPARATOR . $name) === false) {
        throw new RuntimeException("Cannot write $name");
    }
}

echo "\nDone. " . count($names) . " files in $outDir\n";
