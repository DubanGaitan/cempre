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
        Schema::create('evaluaciones', function (Blueprint $table) {
            $table->id();
            $table->string('correo', 255);
            $table->string('nombre_diligenciador', 200);
            $table->string('cargo', 100);
            $table->string('razon_social', 150);
            $table->string('nit', 45);
            $table->string('producto_principal', 255);
            $table->string('numero_contacto', 45);
            $table->string('direccion', 100);
            $table->string('sector_produccion', 50);

            $table->foreignId('departamento_id')->nullable()->constrained('departamentos')->restrictOnDelete();
            $table->foreignId('municipio_id')->nullable()->constrained('municipios')->restrictOnDelete();
            $table->foreignId('actor_ciclo_vida_id')->constrained('actores_ciclo_vida')->restrictOnDelete();
            $table->foreignId('tipo_modelo_negocio_id')->constrained('tipos_modelos_negocio')->restrictOnDelete();
            $table->foreignId('materiales_utilizados_id')->constrained('materiales_utilizados')->restrictOnDelete();
            $table->foreignId('nivel_madurez_id')->constrained('niveles_madurez')->restrictOnDelete();

            $table->boolean('permitir_reevaluacion')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluaciones');
    }
};
