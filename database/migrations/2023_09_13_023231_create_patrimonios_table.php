<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patrimonios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('institucion_id')->nullable()->constrained('instituciones','id')
                ->onUpdate('cascade')->onDelete('cascade')
            ;
            $table->string('codigo_patrimonio')->index()->nullable();
            $table->string('descripcion',255);
            $table->string('marca')->index()->nullable();
            $table->string('modelo')->index()->nullable();
            $table->string('numero_serie')->index()->nullable();
            $table->string('ubicacion_fiscal',255)->index()->nullable();
            $table->foreignId('estado_id')->nullable()->constrained('estados','id')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedTinyInteger('es_activo')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patrimonios');
    }
};
