<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pregunta_respondida')->constrained('preguntas_respondidas')->onDelete('cascade');
            $table->foreignId('id_opcion_pregunta')->constrained('opciones_preguntas')->onDelete('cascade')->nullable(); // Para selección múltiple
            $table->boolean('respuesta_bool')->nullable(); // Para verdadero o falso
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
};
