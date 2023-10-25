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
        Schema::create('amonestacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_amonestacion')->nullable();#borrar posteriormente solo es para porbar el seed sin problemas
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amonestacion');
    }
};