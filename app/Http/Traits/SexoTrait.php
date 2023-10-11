<?php
namespace App\Http\Traits;

use App\Models\Sexo;

trait SexoTrait
{
    /**
     * get by nombre
     * @param string $nombre
     *
     * @return App\Models\Sexo
     */
    public static function getByNombre(string $nombre) :Sexo
    {
        return Sexo::where('nombre',$nombre)->first();
    }
}
