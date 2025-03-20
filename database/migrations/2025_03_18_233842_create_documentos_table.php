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
        Schema::create('documentos', function (Blueprint $table) {
            
            $table->id('id_documento'); // Clave primaria
            $table->dateTime('fecha_actualizacion_doc');// Fecha de actualización
            
            // Claves foráneas
            $table->unsignedBigInteger('id_estudio');
            $table->unsignedBigInteger('id_documento_soporte');
            $table->unsignedBigInteger('id_idioma');
            $table->unsignedBigInteger('id_produccion_academica');
            $table->unsignedBigInteger('id_experiencia');


            $table->foreign('id_estudio')->references('id_estudio')->on('estudios')->onDelete('cascade'); 
            $table->foreign('id_documento_soporte')->references('id_documento_soporte')->on('documentos_soporte')->onDelete('cascade');
            $table->foreign('id_idioma')->references('id_idioma')->on('idiomas')->onDelete('cascade');
            $table->foreign('id_produccion_academica')->references('id_produccion_academica')->on('producciones_academicas')->onDelete('cascade');
            $table->foreign('id_experiencia')->references('id_experiencia')->on('experiencias')->onDelete('cascade');

            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
