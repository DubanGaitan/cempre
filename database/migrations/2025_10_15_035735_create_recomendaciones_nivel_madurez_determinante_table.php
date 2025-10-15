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
        Schema::create('recomendaciones_nivel_madurez_determinante', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nivel_madurez_id')->constrained('niveles_madurez')->restrictOnDelete();
            $table->foreignId('esfera_id')->constrained('esferas')->restrictOnDelete();
            $table->foreignId('determinante_id')->constrained('determinantes')->restrictOnDelete();
            $table->longText('recomendacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recomendaciones_nivel_madurez_determinante');
    }
};
