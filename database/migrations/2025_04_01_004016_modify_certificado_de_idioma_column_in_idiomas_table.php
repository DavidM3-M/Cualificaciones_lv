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
        Schema::table('idiomas', function (Blueprint $table) {
            $table->string('certificado_de_idioma', 1024)->change(); // Aumenta el tamaño a 1024 caracteres
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('idiomas', function (Blueprint $table) {
            $table->string('certificado_de_idioma', 255)->change(); // Revertir a 255 si es necesario
        });
    }
};
