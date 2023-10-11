<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_documento_id', 'numero_documento',
        'nombres', 'apellido_paterno','apellido_materno',
        'sexo_id', 'telefono', 'direccion'
    ];

    /**
     * Get the empleado associated with the Persona
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado(): HasOne
    {
        return $this->hasOne(Empleado::class, 'empleado_id', 'id');
    }

    /**
     * Get the tipo_documento that owns the Persona
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipo_documento(): BelongsTo
    {
        return $this->belongsTo(TipoDocumento::class, 'tipo_documento_id', 'id');
    }

    /**
     * Get the sexo that owns the Persona
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sexo(): BelongsTo
    {
        return $this->belongsTo(Sexo::class, 'sexo_id', 'id');
    }
}
