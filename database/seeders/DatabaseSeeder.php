<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TipoDocumentoSeeder::class,
            SexoSeeder::class,
            AreaSeeder::class,
            CargoSeeder::class,
            RoleSeeder::class,
            AdminUserSeeder::class,
            EstadoSeeder::class,
            PatrimonioSeeder::class,
        ]);
    }
}
