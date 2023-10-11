<?php

namespace App\Models;

use App\Http\Traits\TipoDocumentoTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoDocumento extends Model
{
    use HasFactory, TipoDocumentoTrait;

    protected $fillable = ['codigo','descripcion','es_activo'];

    /**
     * Get all of the personas for the TipoDocumento
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personas(): HasMany
    {
        return $this->hasMany(Persona::class, 'persona_id', 'id');
    }
}
