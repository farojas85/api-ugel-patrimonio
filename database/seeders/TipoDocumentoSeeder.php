<?php

namespace Database\Seeders;

use App\Models\TipoDocumento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo_documento = new TipoDocumento();

        $tipo_documento->firstOrCreate(['codigo' => '0','descripcion' => 'SIN DOCUMENTO','es_activo' => 1]);
        $tipo_documento->firstOrCreate(['codigo' => '1','descripcion' => 'D.N.I/L.E.','es_activo' => 1]);
        $tipo_documento->firstOrCreate(['codigo' => '4','descripcion' => 'CARNET EXTRANJERIA','es_activo' => 1]);
        $tipo_documento->firstOrCreate(['codigo' => '6','descripcion' => 'R.U.C.','es_activo' => 0]);
        $tipo_documento->firstOrCreate(['codigo' => '7','descripcion' => 'PASAPORTE','es_activo' => 1]);
        $tipo_documento->firstOrCreate(['codigo' => 'A','descripcion' => 'CÉDULA DIPLOMÁTICA DE IDENTIDAD','es_activo' => 0]);
        $tipo_documento->firstOrCreate(['codigo' => 'B','descripcion' => 'DOC.IDENT.PAIS.RESIDENCIA-NO.D','es_activo' => 0]);
        $tipo_documento->firstOrCreate(['codigo' => 'C','descripcion' => 'Tax Identification Number - TIN - Doc Trib PP.NN','es_activo' => 0]);
        $tipo_documento->firstOrCreate(['codigo' => 'D','descripcion' => 'Identification Number - IN - Doc Trib PP. JJ','es_activo' => 0]);
        $tipo_documento->firstOrCreate(['codigo' => 'E','descripcion' => 'TAM - Tarjeta Andina de Migración','es_activo' => 0]);
    }
}
