<?php
namespace jdgOpenCode\verifactu\Models;
use jdgOpenCode\verifactu\Listas;
use jdgOpenCode\verifactu\VeriFactuDateTimeHelper;
use jdgOpenCode\verifactu\VeriFactuHashGenerator;

class RegistroAnulacion
{
    /**
     * Identificación de la versión actual del esquema o estructura de información utilizada para la generación y conservación / remisión de los registros de facturación. Este campo forma parte del detalle de las circunstancias de generación de los registros de facturación.
     */
    public Listas\L15 $IDVersion;
    public IDFacturaAnulada $IDFactura;

    public Encadenamiento $Encadenamiento;
    public SistemaInformatico $SistemaInformatico;
    /**
     * Huella o «hash» de cierto contenido de este registro de facturación. Dicho contenido se detallará en la documentación correspondiente en la sede electrónica de la AEAT (documento de huella...).
     */
    public ?string $Huella = null;
    /**
     * Fecha, hora y huso horario de generación del registro de facturación. El huso horario es el que está usando el sistema informático de facturación en el momento de generación del registro de facturación.
     */
    public ?string $FechaHoraHusoGenRegistro = null;
    /**
     * Tipo de algoritmo aplicado a cierto contenido del registro de facturación para obtener la huella o «hash».
     */
    public Listas\L12 $TipoHuella = Listas\L12::SHA256;


    public function toArray() {
        $data = [
            'IDVersion'=>$this->IDVersion->value,
            'IDFactura'=>$this->IDFactura->toArray(),
        ];
        $data['Encadenamiento'] =  $this->Encadenamiento->toArray();
        $data['SistemaInformatico'] =  $this->SistemaInformatico->toArray();
        $data['TipoHuella'] =  $this->TipoHuella->value;
        $this->FechaHoraHusoGenRegistro = VeriFactuDateTimeHelper::nowIso8601();
        $invoiceData = [
            'IDEmisorFacturaAnulada' => $this->IDFactura->IDEmisorFactura,
            'NumSerieFacturaAnulada' => $this->IDFactura->NumSerieFactura,
            'FechaExpedicionFacturaAnulada' => VeriFactuDateTimeHelper::formatDate($this->IDFactura->FechaExpedicionFactura),
            'Huella' => $this->Encadenamiento->RegistroAnterior->Huella,
            'FechaHoraHusoGenRegistro' => $this->FechaHoraHusoGenRegistro,
        ];
        $hashInvoice = VeriFactuHashGenerator::generateHashInvoiceCancellation($invoiceData);
        $this->Huella = $hashInvoice['hash'];
        $data['Huella'] =  $this->Huella;
        $data['FechaHoraHusoGenRegistro'] =  $this->FechaHoraHusoGenRegistro;
        return $data;
    } 
}