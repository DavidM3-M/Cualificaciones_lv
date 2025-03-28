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
        Schema::create('documentos_soporte', function (Blueprint $table) {
            $table->id('id_documento_soporte'); 
            $table->binary('documento_identidad')->nullable();
            $table->binary('tarjeta_servicio_militar')->nullable(); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documento_soportes');
    }
};
