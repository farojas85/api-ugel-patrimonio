<?php
namespace App\Http\Traits;

use App\Models\Institucion;
use App\Models\Patrimonio;
use App\Models\Sede;
use Illuminate\Support\Facades\DB;

trait PatrimonioImportTrait
{
    /**
     * truncate table sedes
     * @return void
     */
    public function truncateSedes(): void {
        //DB::unprepared('SET FOREING_KEY_CHECKS = 0;');
        Sede::truncate();
        //DB::statement("SET foreign_key_checks=1");
    }

    /**
     * truncate table patrimonios
     * @return void
     */
    public function truncatePatrimonios(): void {
        //DB::unprepared("SET FOREIGN_KEY_CHECKS = 0;");
        Patrimonio::truncate();
        //DB::statement("SET foreign_key_checks=1");
    }

    /**
     * truncate table instituciones
     * @return void
     */
    public function truncateInstituciones(): void {
        //DB::unprepared("SET FOREIGN_KEY_CHECKS = 0;");
        Institucion::truncate();
        //DB::statement("SET foreign_key_checks=1");
    }


    public function saveSede(array $data): Sede {
        return Sede::firstOrCreate([
            'codigo' => $data['codigo'],
            'nombre' => $data['nombre']
        ]);
    }
    /**
     * Store data in table instituciones
     * @param array $data
     *
     * @return Institucion
     */
    public function saveInstitucion(array $data): Institucion {
        $institucion = Institucion::firstOrCreate([
            'codigo_modular' => $data['codigo_modular'],
            'nombre' => $data['nombre'],
            'es_activo' => 1
        ]);

        return $institucion;
    }

    /**
     * store data in table patrimnonios
     * @param array $data
     *
     * @return Patrimonio
     */
    public function savePatrimonio(array $data): Patrimonio {

        $patrimonio = Patrimonio::firstOrCreate([
            'codigo_patrimonio' => $data['codigo_patrimonio'],
            'institucion_id' => $data['institucion_id'],
            'descripcion' => $data['descripcion'],
            'marca' => $data['marca'],
            'modelo' => $data['modelo'],
            'numero_serie' => $data['numero_serie'],
            'ubicacion_fiscal' => $data['ubicacion_fiscal'],
            'estado_id' => $data['estado_id'],
            'es_activo' => 1
        ]);

        return $patrimonio;
    }
}
