<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('preguntas_respondidas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_encuesta')->constrained('encuestas');
            $table->foreignId('id_pregunta')->constrained('preguntas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('preguntas_respondidas');
    }
};
