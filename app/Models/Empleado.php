<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'persona_id', 'user_id', 'area_id', 'cargo_id','es_activo'
    ];

    /**
     * Get the persona that owns the Empleado
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function persona(): BelongsTo
    {
        return $this->belongsTo(Persona::class, 'persona_id', 'id');
    }

    /**
     * Get the user that owns the Empleado
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }

    /**
     * Get the area that owns the Empleado
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }

    /**
     * Get the cargo that owns the Empleado
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cargo(): BelongsTo
    {
        return $this->belongsTo(Cargo::class, 'cargo_id', 'id');
    }
}
