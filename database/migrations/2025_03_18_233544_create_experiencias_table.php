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
        Schema::create('experiencias', function (Blueprint $table) {
            $table->id('id_experiencia'); // Clave primaria

            // Campos basados en tu imagen
            $table->enum('tipo_de_experiencia', ['Laboral', 'Voluntariado', 'Prácticas', 'Investigación'])->nullable();
            $table->enum('experiencia_obtenida_ADC', ['Sí', 'No'])->nullable();
            $table->string('institucion_exp', 100);
            $table->enum('trabajo_actual', ['Sí', 'No'])->nullable();
            $table->string('cargo', 50);
            $table->string('intensidad', 20)->nullable();
            $table->date('fecha_de_inicio_exp');
            $table->date('fecha_de_finalizacion_exp')->nullable();
            $table->binary('certificado_exp')->nullable(); 

            $table->timestamps(); // Registra created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiencias');
    }
};
