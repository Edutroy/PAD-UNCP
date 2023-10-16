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
            $table->id('TipoID');
            $table->foreignId('IDProceso')->constrained('procesodisciplinario','ProcesoID');
            $table->foreignId('IDFase')->constrained('fase','FaseID');
            $table->foreignId('IDDocumento')->constrained('documento','DocumentoID');
      
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