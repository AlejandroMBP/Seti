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
        Schema::create('formacion', function (Blueprint $table) {
            $table->id('id_formacion');
            $table->bigInteger('id_hoja_vida')->unsigned();
            $table->string('nombre_institucion', 255);
            $table->date('fecha_emision');
            $table->string('institucion', 255);
            $table->string('encargado', 255)->nullable();
            $table->string('rol', 255)->nullable();
            $table->string('codigo', 255);
            $table->timestamps();

            $table->foreign('id_hoja_vida')
                ->references('id_hoja_vida')
                ->on('hoja_de_vida')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->index('id_hoja_vida');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formacion');
    }
};
