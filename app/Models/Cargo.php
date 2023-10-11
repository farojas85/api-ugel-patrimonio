<?php

namespace App\Models;

use App\Http\Traits\CargoTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cargo extends Model
{
    use HasFactory, CargoTrait;

    protected $fillable = ['nombre'];

    /**
     * Get all of the empleadores for the Cargo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleados(): HasMany
    {
        return $this->hasMany(Empleado::class, 'empleado_id');
    }
}
