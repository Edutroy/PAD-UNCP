<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('proceso_disciplinario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('numero_proceso');
            $table->string('estado');
            $table->foreignId('amonestacion_id')->constrained('amonestacion','id');
            $table->foreignId('secretario_tecnico_id')->constrained('persona','id');
            $table->foreignId('falta_id')->constrained('falta','id');
            $table->string('proceso_fase_id');
            $table->foreignId('demandado_id')->constrained('persona','id');
            $table->foreignId('demandante_id')->constrained('persona','id');
            $table->foreignId('instructor_id')->constrained('persona','id');
            $table->foreignId('sancionador_id')->constrained('persona','id');
            $table->foreignId('oficializador_id')->constrained('persona','id');
            $table-> string('instancia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proceso_disciplinario');
       
    }
};