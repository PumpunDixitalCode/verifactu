<?php

namespace jdgOpenCode\verifactu;

class VeriFactuRegistroFactura
{
    private $wsdl;
    private $schemaBaseUrl;
    private $location;
    private $production;

    public function __construct($production = false)
    {
        $this->production = $production;
        if ($production) {
            $this->wsdl = 'https://prewww2.aeat.es/static_files/common/internet/dep/aplicaciones/es/aeat/tikeV1.0/cont/ws/SistemaFacturacion.wsdl';
            $this->schemaBaseUrl = 'https://www1.agenciatributaria.gob.es/wlpl/TIKE-CONT/ws/SistemaFacturacion/VerifactuSOAP';
            // ToDo :: Extract the location from the WSDL
            $this->location = 'https://prewww1.aeat.es/wlpl/TIKE-CONT/ws/SistemaFacturacion/VerifactuSOAP';
        } else {
            $this->wsdl = 'https://prewww2.aeat.es/static_files/common/internet/dep/aplicaciones/es/aeat/tikeV1.0/cont/ws/SistemaFacturacion.wsdl';
            $this->schemaBaseUrl = 'https://www2.agenciatributaria.gob.es/static_files/common/internet/dep/aplicaciones/es/aeat/tike/cont/ws/';
            $this->location = 'https://prewww1.aeat.es/wlpl/TIKE-CONT/ws/SistemaFacturacion/VerifactuSOAP';
        }
    }

    public function send(Models\DsRegistroVeriFactu $dsRegistroVeriFactu, $certificatePath, $certificatePassphrase): array
    {
        $ret = ['request' => '', 'response' => '', 'status' => ''];

        try {
            $dsRegistroVeriFactuAsArray = $dsRegistroVeriFactu->toArray();
        } catch (\Exception $e) {
            $ret['status'] = 'fail';
            $ret['response'] = $e->getMessage();
            return $ret;
        }
        $ret['hashes'] = [];
        foreach ($dsRegistroVeriFactuAsArray['RegistroFactura'] as $registroFactura) {
            if (isset($registroFactura['RegistroAlta'])) {
                $ret['hashes'][] = [
                    'NumSerieFactura' => $registroFactura['RegistroAlta']['IDFactura']['NumSerieFactura'],
                    'Huella' => $registroFactura['RegistroAlta']['Huella'],
                    'FechaHoraHusoGenRegistro' => $registroFactura['RegistroAlta']['FechaHoraHusoGenRegistro']
                ];
            } else
                if (isset($registroFactura['RegistroAnulacion'])) {
                    $ret['hashes'][] = [
                        'NumSerieFacturaAnulada' => $registroFactura['RegistroAnulacion']['IDFactura']['NumSerieFacturaAnulada'],
                        'Huella' => $registroFactura['RegistroAnulacion']['Huella'],
                        'FechaHoraHusoGenRegistro' => $registroFactura['RegistroAnulacion']['FechaExpedicionFacturaAnulada']
                    ];
                } else {
                    throw new \Exception('The data contains a non valid "RegistroFactura" type.');
                }
        }

        $options = [
            'local_cert' => $certificatePath,
            'passphrase' => $certificatePassphrase,
            'trace' => true,
            'exceptions' => true,
            'cache_wsdl' => 0, // WSDL_CACHE_NONE,
            'stream_context' => stream_context_create([
                'ssl' => [
                    'verify_peer' => true,
                    'verify_peer_name' => true,
                    'allow_self_signed' => false,
                    'crypto_method' => 33, // STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT,
                ],
            ]),
            'soap_version' => SOAP_1_1,
            'style' => SOAP_DOCUMENT,
            'use' => SOAP_LITERAL
        ];

        try {
            // $client = new SoapClientDebugger($this->wsdl, $options);
            $client = new \SoapClient($this->wsdl, $options);
            $client->__setLocation($this->location);
            $client->__soapCall('RegFactuSistemaFacturacion', [$dsRegistroVeriFactuAsArray]);
            $request = $client->__getLastRequest();
            $response = $client->__getLastResponse();
            if (!$this->production) {
                $ret['request'] = $request;
                $ret['response'] = $response;
            }
            $ret['status'] = self::checkResponse($response);
        } catch (\SoapFault $e) {
            if (isset($client)) {
                $request = $client->__getLastRequest();
                $response = $client->__getLastResponse();
                if (!$this->production) {
                    $ret['request'] = $request;
                    $ret['response'] = $response;
                }
                $ret['status'] = self::checkResponse($response, $e);
            }
        }
        return $ret;
    }

    public static function checkResponse($xmlString, \Exception $e = null)
    {
        if (isset($e)) {
            $error = self::processException($e);
            $error["error"] = true;
            return $error;
        }
        try {
            libxml_use_internal_errors(true);
            $xml = simplexml_load_string($xmlString);
            if ($xml === false) {
                return [
                    "error" => true,
                    "codigo" => 4103,
                    "mensaje" => "Se ha producido un error inesperado al parsear el XML."
                ];
            }
            $namespaces = $xml->getNamespaces(true);
            $body = $xml->children($namespaces['env'])->Body;
            $respuesta = $body->children($namespaces['tikR'])->RespuestaRegFactuSistemaFacturacion;
            $estadoEnvio = (string)$respuesta->children($namespaces['tikR'])->EstadoEnvio;
            if ($estadoEnvio === "Incorrecto") {
                $respuestaLinea = $respuesta->children($namespaces['tikR'])->RespuestaLinea;
                $codigoErrorRegistro = (string)$respuestaLinea->children($namespaces['tikR'])->CodigoErrorRegistro;
                $descripcionError = (string)$respuestaLinea->children($namespaces['tikR'])->DescripcionErrorRegistro;

                return [
                    "error" => true,
                    "codigo" => $codigoErrorRegistro,
                    "mensaje" => $descripcionError
                ];
            }
        } catch (\Exception $ex) {
            return [
                "error" => true,
                "codigo" => 4103,
                "mensaje" => $ex->getMessage()
            ];
        }
        return [
            "error" => false,
            "codigo" => null,
            "mensaje" => null
        ];
    }

    /**
     * Process the error string, extracting the error code and message, and throws an exception.
     *
     * This method uses a regular expression to parse the provided error string. If the string matches
     * the expected format ("Codigo[<code>].<error_message>"), it throws an ApiException with the error code
     * and message. If the format doesn't match, it throws an ApiException with the full error string.
     *
     * @param \Exception $e The error to be processed. Expected format: "Codigo[<code>].<error_message>".
     */
    private static function processException(\Exception $e): array
    {
        // Regular expression to extract the code and error message
        preg_match('/Codigo\[(\d+)\]\.(.*)/', $e, $matches);

        // Verify if a match was found
        if (!empty($matches)) {
            $code = $matches[1]; // The code
            $error = $matches[2]; // The error message
            return ["message" => $error, "codigo" => (int)$code];
        } else {
            return ["message" => $e->getMessage(), "codigo" => 9999];
        }
    }
    /*
https://sede.agenciatributaria.gob.es/Sede/iva/sistemas-informaticos-facturacion-verifactu/informacion-tecnica.html
https://prewww2.aeat.es/static_files/common/internet/dep/aplicaciones/es/aeat/tikeV1.0/cont/ws/errores.properties
[response] => looks like we got no XML document
[response] => SOAP-ERROR: Encoding: object has no 'Cabecera' property
[response] => No se detecta certificado electrónico
[response] => Codigo[103].NIF no identificado: 99999972C/EIDAS CERTIFICADO PRUEBAS
[response] => Codigo[103].Error interno en el servidor  ¿certificado caducado?

[response] => Codigo[4104].Error en la cabecera: el valor del campo NIF del bloque ObligadoEmision no está identificado.. NIF:***. NOMBRE_RAZON:***
              - El nombre_razon no estaba escrito igual que en el certificado digital.
              - Tras corregir el nombre_razon, el envio se realizó correctamente (pero con errores).
[respose]  => <tikR:CodigoErrorRegistro>1110</tikR:CodigoErrorRegistro><tikR:DescripcionErrorRegistro>Error en el bloque Destinatario.. El NIF no está identificado en el censo de la AEAT.. NIF:11111111H. NOMBRE_RAZON:Test customer.
              - El NIF y nombre son inventados XD, tengo que buscar uno real.
[response] => Codigo[4103].Se ha producido un error inesperado al parsear el XML.

*/
}
