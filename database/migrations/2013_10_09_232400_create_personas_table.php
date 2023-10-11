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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_documento_id')->nullable()->constrained('tipo_documentos','id')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->string('numero_documento',15)->nullable()->unique()->index();
            $table->string('nombres')->nullable();
            $table->string('apellido_paterno')->nullable();
            $table->string('apellido_materno')->nullable();
            $table->foreignId('sexo_id')->nullable()->constrained('sexos','id')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->string('telefono')->nullable();
            $table->string('direccion',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
