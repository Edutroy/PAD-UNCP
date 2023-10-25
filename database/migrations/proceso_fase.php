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
        Schema::create('proceso_fase', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proceso_id')->constrained('proceso_disciplinario','id');
            $table->foreignId('fase_id')->constrained('fase','id');
            $table->foreignId('documento_id')->constrained('documento','id');
            $table->string('fecha_inicio')->nullable();
            $table->string('fecha_fin')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proceso_fase');
      
    }
};