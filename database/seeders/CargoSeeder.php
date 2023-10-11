<?php

namespace Database\Seeders;

use App\Models\Cargo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cargo = new Cargo();

        $cargo->firstOrCreate(['nombre' => 'DIRECTOR']);
        $cargo->firstOrCreate(['nombre' => 'JEFE DE AGA']);
        $cargo->firstOrCreate(['nombre' => 'JEFE DE AGI']);
        $cargo->firstOrCreate(['nombre' => 'JEFE DE AGP']);
        $cargo->firstOrCreate(['nombre' => 'SECRETARIA DE DIRECCIÓN']);
        $cargo->firstOrCreate(['nombre' => 'RESPONSABLE DE MESA DE PARTES']);
        $cargo->firstOrCreate(['nombre' => 'PERSONAL DE VIGILANCIA NOCHE']);
        $cargo->firstOrCreate(['nombre' => 'ASESOR LEGAL']);
        $cargo->firstOrCreate(['nombre' => 'ESPECIALISTA CCPADD']);
        $cargo->firstOrCreate(['nombre' => 'SECRETARIA AGA']);
        $cargo->firstOrCreate(['nombre' => 'ESPECIALISTA EN RECURSOS HUMANOS']);
        $cargo->firstOrCreate(['nombre' => 'RESPONSABLE DE NEXUS']);
        $cargo->firstOrCreate(['nombre' => 'RESPONSABLE DE ESCALAFON']);
        $cargo->firstOrCreate(['nombre' => 'RESP. DE PLANILLAS, REM. Y RACIONALIZACIÓN']);
        $cargo->firstOrCreate(['nombre' => 'RESPONSABILIDAD DE CONTABILIDAD']);
        $cargo->firstOrCreate(['nombre' => 'RESPONSABLE DE TESORERIA']);
        $cargo->firstOrCreate(['nombre' => 'TECNICO ADMINISTRATIVO I']);
        $cargo->firstOrCreate(['nombre' => 'RESPONSABLE DE ARCHIVOS']);
        $cargo->firstOrCreate(['nombre' => 'RESP. PATRIMONIO Y ALMACEN']);
        $cargo->firstOrCreate(['nombre' => 'RESPONSABLE DE ABASTECIMIENTO']);
        $cargo->firstOrCreate(['nombre' => 'PRACTICANTE PROFESIONAL']);
        $cargo->firstOrCreate(['nombre' => 'PERS. DE SERVICIO (CETPRO)']);
        $cargo->firstOrCreate(['nombre' => 'CONDUCTOR']);
        $cargo->firstOrCreate(['nombre' => 'PRACTICANTE PROFESIONAL']);
        $cargo->firstOrCreate(['nombre' => 'RESPONSABLE DE RACIONALIZACIÓN']);
        $cargo->firstOrCreate(['nombre' => 'RESP. DE ESTADISTICA Y SIAGIE']);
        $cargo->firstOrCreate(['nombre' => 'RESP. DE PLANIFIC. Y PRSUPUESTO']);
        $cargo->firstOrCreate(['nombre' => 'COORDINARORA PREVAED']);
        $cargo->firstOrCreate(['nombre' => 'RESP. INFRAESTRUCTURA']);
        $cargo->firstOrCreate(['nombre' => 'SECRETARIA  AGP']);
        $cargo->firstOrCreate(['nombre' => 'ESP. DE INICIAL']);
        $cargo->firstOrCreate(['nombre' => 'ESP. DE PRIMARIA EIB']);
        $cargo->firstOrCreate(['nombre' => 'ESP. DE PRIMARIA']);
        $cargo->firstOrCreate(['nombre' => 'ESP. DE SECUNDARIA - MATEMÁTICA']);
        $cargo->firstOrCreate(['nombre' => 'ESP. DE SECUNDARIA - COMUNICACIÓN']);
        $cargo->firstOrCreate(['nombre' => 'ESPECIALISTA DE CONVIVENCIA ESCOLAR']);
        $cargo->firstOrCreate(['nombre' => 'ITINERANTE I DE CONVIVENCIA ESCOLAR']);
        $cargo->firstOrCreate(['nombre' => 'ITINERANTE II DE CONVIVENCIA ESCOLAR']);
        $cargo->firstOrCreate(['nombre' => 'COORDINADOR(A) DE PRONOEI']);
        $cargo->firstOrCreate(['nombre' => 'ESPECIALISTA EN COMPUTACIÓN E INFORMATICA']);
        $cargo->firstOrCreate(['nombre' => 'SECRETARIA AGP']);
        $cargo->firstOrCreate(['nombre' => 'SECRETARIA AGI']);
        $cargo->firstOrCreate(['nombre' => 'ESPECIALISTA INFORMATICA I']);
        $cargo->firstOrCreate(['nombre' => 'ESPECIALISTA INFORMATICA II']);

    }
}
