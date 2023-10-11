<?php

namespace App\Models;

use App\Http\Traits\AreaTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Area extends Model
{
    use HasFactory, AreaTrait;

    protected $fillable = ['nombre'];

    /**
     * Get all of the empleados for the Area
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleados(): HasMany
    {
        return $this->hasMany(Empleado::class,'empleado_id','id');
    }
}
