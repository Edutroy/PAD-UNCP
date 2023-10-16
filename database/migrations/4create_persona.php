<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up():void
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->id('PersonaID');
            $table->string('Nombre');
            $table->string('Apellidos');
            $table->string('Correo');
            $table->string('Telefono');
            $table->string('DNI');
            $table->foreignId('IDCARGO')->constrained('rol','rolID');
            
        });
    }

    public function down():void
    {
        Schema::dropIfExists('persona');
    }
};
