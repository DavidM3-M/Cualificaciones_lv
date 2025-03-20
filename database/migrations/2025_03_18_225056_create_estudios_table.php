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
        Schema::create('estudios', function (Blueprint $table) {
            $table->id('id_estudio'); // Clave primaria
            $table->enum('tipo_de_estudio', ['Primaria', 'Secundaria', 'Universidad', 'Postgrado']); 
            $table->enum('graduado', ['Si', 'No'])->default('No');
            $table->date('fecha_de_graduacion')->nullable();
            $table->string('institucion_estudio', 50);
            $table->string('titulo_obtenido', 50);
            $table->enum('titulo_convalidado', ['Si', 'No'])->default('No');
            $table->date('fecha_de_convalidacion')->nullable();
            $table->string('resolucion_de_convalidacion', 50)->nullable();
            $table->enum('pais_estudio', ['Colombia', 'Ecuador', 'Perú', 'Otro']); 
            $table->enum('departamento_estudio', ['Antioquia', 'Cundinamarca', 'Valle', 'Otro']); 
            $table->enum('ciudad_estudio', ['Bogotá', 'Medellín', 'Cali', 'Otra']); 
            $table->date('fecha_de_inicio_est')->nullable();
            $table->date('fecha_de_finalizacion_est')->nullable();
            $table->binary('certificado_est')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudios');
    }
};
