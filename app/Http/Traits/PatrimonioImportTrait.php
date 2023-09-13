<?php
namespace App\Http\Traits;

use App\Models\Institucion;
use App\Models\Patrimonio;
use Illuminate\Support\Facades\DB;

trait PatrimonioImportTrait
{
    public function truncatePatrimonios(): void {
        DB::unprepared("SET FOREIGN_KEY_CHECKS = 0;");
        Patrimonio::truncate();
        DB::statement("SET foreign_key_checks=1");
    }

    public function truncateInstituciones(): void {
        DB::unprepared("SET FOREIGN_KEY_CHECKS = 0;");
        Institucion::truncate();
        DB::statement("SET foreign_key_checks=1");
    }

    public function saveInstitucion(array $data): Institucion {
        $institucion = Institucion::firstOrCreate([
            'codigo_modular' => $data['codigo_modular'],
            'nombre' => $data['nombre'],
            'es_activo' => 1
        ]);

        return $institucion;
    }

    public function savePatrimonio(array $data): Patrimonio {

        $patrimonio = Patrimonio::firstOrCreate([
            'codigo_patrimonio' => $data['codigo_patrimonio'],
            'institucion_id' => $data['institucion_id'],
            'descripcion' => $data['descripcion'],
            'locacion' => $data['locacion'],
            'estado_id' => $data['estado_id'],
            'es_activo' => 1
        ]);

        return $patrimonio;
    }
}
