<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estado::firstOrCreate([ 'codigo' => 0, 'nombre' => 'MALO' ]);
        Estado::firstOrCreate([ 'codigo' => 1, 'nombre' => 'REGULAR' ]);
        Estado::firstOrCreate([ 'codigo' => 2, 'nombre' => 'BUENO' ]);
    }
}
