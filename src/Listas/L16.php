<?php 
namespace jdgOpenCode\verifactu\Listas;

// L6
enum L16: string {
    case DESTINATARIO = 'D';
    case TERCERO = 'T';

    public function description(): string {
        return match($this) {
            self::DESTINATARIO => 'Destinatario',
            self::TERCERO => 'Tercero',
        };
    }
}