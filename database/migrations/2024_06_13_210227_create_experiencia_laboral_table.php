<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('experiencia_laboral', function (Blueprint $table) {
            $table->id('id_experiencia_laboral');
            $table->string('institucion', 255);
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->string('memorial', 250)->nullable();
            $table->string('cargo', 200)->nullable();
            $table->bigInteger('id_hoja_vida')->unsigned();

            $table->foreign('id_hoja_vida')
                ->references('id_hoja_vida')
                ->on('hoja_de_vida')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->string('referencia', 45)->nullable();
            $table->timestamps();

            $table->index('id_hoja_vida');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiencia_laboral');
    }
};
