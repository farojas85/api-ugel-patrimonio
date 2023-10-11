<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::firstOrCreate([
            'nombre' => 'Super Usuario',
            'slug' => 'super-usuario',
            'es_activo' => 1
        ]);

        Role::firstOrCreate([
            'nombre' => 'Admninistrador',
            'slug' => 'administrador',
            'es_activo' => 1
        ]);

        Role::firstOrCreate([
            'nombre' => 'Vendedor',
            'slug' => 'vendedor',
            'es_activo' => 1
        ]);
    }
}
