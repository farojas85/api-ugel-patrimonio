<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Estado extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo', 'nombre'
    ];

    /**
     * Get all of the patrimonios for the Estado
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function patrimonios(): HasMany
    {
        return $this->hasMany(Patrimonio::class, 'estado_id', 'id');
    }
}
