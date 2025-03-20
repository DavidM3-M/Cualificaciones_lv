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
        Schema::create('informacion_contactos', function (Blueprint $table) {
            $table->id('id_InformacionContacto'); // Clave primaria
            $table->string('pais_info', 50);
            $table->string('departamento_info', 50);
            $table->string('ciudad_info', 50);
            $table->string('direccion_info', 50);
            $table->string('barrio_info', 50);
            $table->string('telefono_fijo', 50);
            $table->string('telefono_celular', 50);
            $table->string('correo_electronico', 50);
            
            $table->timestamps(); // Registra fecha de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informacion_contactos');
    }
};
