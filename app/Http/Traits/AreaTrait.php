<?php
namespace App\Http\Traits;

use App\Models\Area;

trait AreaTrait
{
    /**
     *
     * @param string $nombre
     *
     * @return Area
     */
    public static function getByNombre(string $nombre) :Area
    {
        return Area::where('nombre',$nombre)->first();
    }
}
