<?php
namespace App\Http\Traits;

use App\Models\Cargo;

trait CargoTrait
{
    /**
     *
     * @param string $nombre
     *
     * @return App\Models\Cargo
     */
    public static function getByNombre(string $nombre) :Cargo
    {
        return Cargo::where('nombre',$nombre)->first();
    }
}
