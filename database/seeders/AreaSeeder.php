<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $area = new Area();

        $area->firstOrCreate(['nombre' => 'DIRECCION']);
        $area->firstOrCreate(['nombre' => 'GESTION ADMINISTRATIVA']);
        $area->firstOrCreate(['nombre' => 'GESTION INSTITUCIONAL']);
        $area->firstOrCreate(['nombre' => 'GESTION PEDAGOGICA']);
        $area->firstOrCreate(['nombre' => 'ASESORIA JURIDICA']);
    }
}
