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
            $table->string('codigo_patrimonio')->nullable();
            $table->foreignId('institucion_id')->nullable()->constrained('instituciones','id')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('descripcion',255);
            $table->string('locacion',255)->nullable();
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
