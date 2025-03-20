<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id('id_Persona');
            $table->string('tipo_de_identificacion', 20);
            $table->string('identificacion', 50)->unique();
            $table->string('primer_nombre', 50);
            $table->string('segundo_nombre', 50)->nullable();
            $table->string('primer_apellido', 50);
            $table->string('segundo_apellido', 50)->nullable();
            $table->enum('genero', ['Masculino', 'Femenino', 'Otro']);
            $table->enum('estado_civil', ['Soltero', 'Casado', 'Divorciado', 'Viudo', 'Unión Libre']);
            $table->enum('categoria_libreta_militar', ['Primera', 'Segunda'])->nullable();
            $table->string('numero_libreta_militar', 20)->nullable();
            $table->string('numero_distrito_militar', 20)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personas');
    }
};