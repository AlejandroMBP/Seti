<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('hoja_de_vida', function (Blueprint $table) {
            $table->id('id_hoja_vida');
            $table->bigInteger('id_titulo')->unsigned();
            $table->bigInteger('id_persona')->unsigned();
            $table->date('fecha_creacion');
            $table->date('fecha_modificacion');
            $table->string('descripcion', 255)->nullable();
            $table->bigInteger('id_formacion')->unsigned();
            $table->bigInteger('id_certificacion')->unsigned();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoja_de_vida');
    }
};
