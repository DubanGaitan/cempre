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
        Schema::create('niveles_madurez', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_nivel', 45);
            $table->longText('descripcion');
            $table->integer('puntaje_min');
            $table->integer('puntaje_max');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('niveles_madurez');
    }
};
