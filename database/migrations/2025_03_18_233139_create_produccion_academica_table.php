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
        Schema::create('producciones_academicas', function (Blueprint $table) {
            $table->id('id_produccion_academica'); // Clave primaria
            $table->enum('tipo_de_produccion', ['Artículo', 'Libro', 'Ponencia', 'Tesis'])->nullable(); 
            $table->string('titulo_de_produccion', 50); 
            $table->string('autores', 50); 
            $table->date('fecha_de_publicacion')->nullable(); 
            $table->enum('indexado_db', ['Sí', 'No'])->nullable(); 
            $table->string('base_de_datos', 100)->nullable(); 
            $table->string('institucion_pa', 50)->nullable(); 
            $table->enum('pais_pa', ['Colombia', 'México', 'España', 'Argentina', 'Otro'])->nullable(); 
            $table->enum('departamento_pa', ['Antioquia', 'Cundinamarca', 'Madrid', 'Cataluña', 'Otro'])->nullable(); 
            $table->enum('ciudad_pa', ['Bogotá', 'Medellín', 'Barcelona', 'CDMX', 'Otro'])->nullable(); 
            $table->enum('tipo_de_participacion', ['Autor', 'Coautor', 'Editor', 'Revisor'])->nullable(); 
            $table->binary('archivo_de_produccion')->nullable(); 
            $table->timestamps(); 
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produccion_academica');
    }
};
