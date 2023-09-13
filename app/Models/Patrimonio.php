<?php

namespace App\Models;

use App\Http\Traits\PatrimonioTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Patrimonio extends Model
{
    use HasFactory;

    protected $fillable = [
        'institucion_id','descripcion', 'locacion',
        'estado_id', 'es_activo'
    ];

    /**
     * Get the institucion that owns the Patrimonio
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function institucion(): BelongsTo
    {
        return $this->belongsTo(Institucion::class, 'institucion_id');
    }

    /**
     * Get the estado that owns the Patrimonio
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estado(): BelongsTo
    {
        return $this->belongsTo(Estado::class, 'estado_id');
    }

}
