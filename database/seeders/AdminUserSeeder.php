<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Cargo;
use App\Models\Empleado;
use App\Models\Persona;
use App\Models\Role;
use App\Models\Sexo;
use App\Models\TipoDocumento;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Obtenemos tipo de documento DNI
        $tipo_documento = TipoDocumento::getByCodigo('1')->id;

        //Obtenmos sexo masculino
        $sexo = Sexo::getByNombre('Masculino')->id;

        //guardamos datos de Persona
        $persona = Persona::firstOrCreate([
            'tipo_documento_id' => $tipo_documento,
            'numero_documento' => '0000000',
            'nombres' => 'ADMIN',
            'apellido_paterno' => 'MASTER',
            'apellido_materno' => 'MASTER',
            'sexo_id' =>$sexo
        ]);

        //guardamos datos de Usuario
        $user = User::firstOrCreate([
            'name' => 'admin',
            'email' => 'admin@me.com',
            'password' => Hash::make('123456789'),
            'foto' => 'foto.png'
        ]);

        //Obtenemos area
        $area = Area::getByNombre('GESTION ADMINISTRATIVA')->id;

        //Obtenemos el cargo
        $cargo = Cargo::getByNombre('ESPECIALISTA INFORMATICA I')->id;

        //guardamos datos del Empleado
        $empleado = Empleado::firstOrCreate([
            'persona_id' => $persona->id,
            'user_id' => $user->id,
            'area_id' => $area,
            'cargo_id' => $cargo
        ]);

        //Obtenemos el rol super-usuario
        $role = Role::getBySlug('super-usuario')->id;

        //asignamos el rol super-usuario al usuario
        $user->roles()->sync([$role]);

    }
}
