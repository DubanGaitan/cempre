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
        Schema::create('actores_ciclo_vida', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 45);
            $table->string('descripcion', 250);
            $table->foreignId('estado_id')->constrained('estados')->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actores_ciclo_vida');
    }
};
