<?php
namespace App\Http\Traits;

use App\Models\TipoDocumento;

trait TipoDocumentoTrait
{
    /**
     * get by codigo
     * @param int $id
     *
     * @return App\Models\TipoDocumento
     */
    public static function getByCodigo(string $codigo) :TipoDocumento
    {
        return TipoDocumento::where('codigo',$codigo)->first();
    }
}
