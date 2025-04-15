<?php

namespace jdgOpenCode\verifactu\Type;

class DatosAdicionalesRespuestaType
{
    /**
     * Indicador que especifica si se quiere obtener en la respuesta el campo NombreRazonEmisor en la información del registro se facturacion. Si el Valor es S aumenta el tiempo de respuesta en la cosulta por detinatario
     *
     * @var null | 'S' | 'N'
     */
    private ?string $MostrarNombreRazonEmisor = null;

    /**
     * Indicador que especifica si se quiere obtener en la respuesta el bloque SistemaInformatico en la información del registro se facturacion. Si el Valor es S aumenta el tiempo de respuesta en la cosulta. Si se consulta por Destinatario el valor del campo MostrarSistemaInformatico debe ser 'N' o no estar cumplimentado
     *
     * @var null | 'S' | 'N'
     */
    private ?string $MostrarSistemaInformatico = null;

    /**
     * @return null | 'S' | 'N'
     */
    public function getMostrarNombreRazonEmisor() : ?string
    {
        return $this->MostrarNombreRazonEmisor;
    }

    /**
     * @param null | 'S' | 'N' $MostrarNombreRazonEmisor
     * @return static
     */
    public function withMostrarNombreRazonEmisor(?string $MostrarNombreRazonEmisor) : static
    {
        $new = clone $this;
        $new->MostrarNombreRazonEmisor = $MostrarNombreRazonEmisor;

        return $new;
    }

    /**
     * @return null | 'S' | 'N'
     */
    public function getMostrarSistemaInformatico() : ?string
    {
        return $this->MostrarSistemaInformatico;
    }

    /**
     * @param null | 'S' | 'N' $MostrarSistemaInformatico
     * @return static
     */
    public function withMostrarSistemaInformatico(?string $MostrarSistemaInformatico) : static
    {
        $new = clone $this;
        $new->MostrarSistemaInformatico = $MostrarSistemaInformatico;

        return $new;
    }
}

