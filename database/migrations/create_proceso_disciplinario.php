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
        Schema::create('procesodisciplinario', function (Blueprint $table) {
            $table->id('ProcesoID');
            $table->integer('NumProceso');
            $table->string('Estadoo');
            $table->foreignId('IDAmonestacion')->constrained('amonestacion','AmonestacionID');
            $table->string('SecretarioTecnico');
            $table->integer('TipoID');
            $table->foreignId('DemandadoID')->constrained('persona','PersonaID');
            $table->foreignId('DemandanteID')->constrained('persona','PersonaID');
            $table->foreignId('InstructorID')->constrained('persona','PersonaID');
            $table->foreignId('SancionadorID')->constrained('persona','PersonaID');
            $table->foreignId('OficializadorID')->constrained('persona','PersonaID');
            $table->string('Instancia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procesodisciplinario');
       
    }
};