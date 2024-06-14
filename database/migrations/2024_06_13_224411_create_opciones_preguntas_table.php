<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('opciones_preguntas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pregunta')->constrained('preguntas');
            $table->string('opcion_texto');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('opciones_preguntas');
    }
};
