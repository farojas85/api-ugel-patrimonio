<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Institucion extends Model
{
    use HasFactory;

    protected $table = 'instituciones';

    protected $fillable = [
        'codigo_modular', 'nombre', 'es_activo'
    ];

    /**
     * Get all of the patrimonios for the Institucion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function patrimonios(): HasMany
    {
        return $this->hasMany(Patrimonio::class, 'institucion_id', 'id');
    }
}
