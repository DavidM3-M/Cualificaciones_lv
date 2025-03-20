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
        Schema::create('idiomas', function (Blueprint $table) {
            $table->id('id_idioma'); 
            $table->string('idioma', 20); 
            $table->string('institucion_idioma', 100)->nullable(); 
            $table->date('fecha_de_certificado_idioma')->nullable(); 
            $table->enum('certificado_de_idioma', ['Básico', 'Intermedio', 'Avanzado', 'Nativo'])->nullable(); 
            $table->binary('nivel_de_idioma')->nullable(); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('idiomas');
    }
};
