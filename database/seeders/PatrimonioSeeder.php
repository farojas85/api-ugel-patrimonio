<?php

namespace Database\Seeders;

use App\Http\Traits\PatrimonioImportTrait;
use App\Models\Estado;
use App\Models\Patrimonio;
use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpOffice\PhpSpreadsheet\IOFactory;

class PatrimonioSeeder extends Seeder
{
    use PatrimonioImportTrait;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //$patrimonio_model = new Patrimonio();

        $estado_regular = Estado::select('id')->where('codigo',1)->first()->value('id');

        $xlsxFile = storage_path('app/documentos/patrimonio-ugel.xlsx');

        $this->command->getOutput()->writeln('  Iniciando Importación de Patrimonio Ugel Huacaybamba...');

        $this->truncatePatrimonios();
        $this->command->getOutput()->writeln('  Datos Limpiados de Patrimonios...');

        $this->truncateInstituciones();
        $this->command->getOutput()->writeln('  Datos Limpiados de Instituciones...');

        try {
            $spreadsheet = IOFactory::load($xlsxFile);
            $sheet        = $spreadsheet->getActiveSheet();
            $row_limit    = $sheet->getHighestDataRow();
            $column_limit = $sheet->getHighestDataColumn();
            $row_range    = range( 2, $row_limit );
            $column_range = range( 'F', $column_limit );
            $startcount = 2;

            $this->command->getOutput()->writeln('  Cantidad de registros: '.($row_limit-1));

            $progressBar = $this->command->getOutput()->createProgressBar($row_limit-1);

            $this->command->getOutput()->writeln("  Importando Datos de Ubigeo... ");

            $progressBar->start();

            foreach($row_range as $row) {
                //Guardamos la institucion;
                $dataInstitucion = array(
                    'codigo_modular' =>  $sheet->getCell('A'.$row)->getValue(),
                    'nombre' => $sheet->getCell('B'.$row)->getValue()
                );

                $institucion = $this->saveInstitucion($dataInstitucion);

                //Guardamos el patrimonio
                $data = array(
                    'codigo_patrimonio' => $sheet->getCell('C'.$row)->getValue(),
                    'institucion_id' => $institucion->id,
                    'descripcion' => $sheet->getCell('D'.$row)->getValue(),
                    'locacion' => $sheet->getCell('F'.$row)->getValue(),
                    'estado_id' => $estado_regular
                );

                $patrimonio = $this->savePatrimonio($data);

                usleep(100);
                $progressBar->advance();

                $startcount+=1;
            }

            $progressBar->finish();
            $this->command->getOutput()->writeln("");
            $this->command->getOutput()->writeln("  Importación Finalizada");

        } catch (Exception $e) {
            $this->command->getOutput()->writeln($e->getMessage());
        }



    }
}
