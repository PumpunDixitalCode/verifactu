<?php
namespace jdgOpenCode\verifactu\Models;
use jdgOpenCode\verifactu\VeriFactuDateTimeHelper;
use jdgOpenCode\verifactu\VeriFactuStringHelper;

class IDFacturaAnulada
{
    /**
     * Número de identificación fiscal (NIF) del obligado a expedir la factura.
     */
    public string $IDEmisorFactura;
    /**
     * Nº Serie+Nº Factura que identifica a la factura emitida.
     */
    public string $NumSerieFactura;
    /**
     * Fecha de expedición de la factura.
     */
    public \DateTime $FechaExpedicionFactura;

    public function toArray() {
        return [
            'IDEmisorFacturaAnulada' => $this->IDEmisorFactura,
            'NumSerieFacturaAnulada' => VeriFactuStringHelper::sanitizeString($this->NumSerieFactura),
            'FechaExpedicionFacturaAnulada' => VeriFactuDateTimeHelper::formatDate($this->FechaExpedicionFactura)
        ];
    }
}