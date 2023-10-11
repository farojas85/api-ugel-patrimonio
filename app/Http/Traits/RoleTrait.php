<?php
namespace App\Http\Traits;

use App\Models\Role;

trait RoleTrait
{
    /**
     *
     * @param string $nombre
     *
     * @return App\Models\Role
     */
    public static function getByNombre(string $nombre) :Role
    {
        return self::where('nombre',$nombre)->first();
    }

    /**
     * @param string $slug
     *
     * @return App\Models\Role
     */
    public static function getBySlug(string $slug): Role
    {
        return self::where('slug',$slug)->first();
    }
}
