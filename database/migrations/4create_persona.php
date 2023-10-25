<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up():void
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('correo')->nullable();
            $table->string('telefono')->nullable();
            $table->string('dni')->nullable();
            $table->foreignId('rol_id')->constrained('rol','id');
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('persona');
    }
};
