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
        Schema::create('certificacion', function (Blueprint $table) {
            $table->id('id_certificacion');
            $table->bigInteger('id_hoja_vida')->unsigned()->nullable();
            $table->string('institucion_nombre', 255)->nullable();
            $table->string('numero_titulo', 255)->nullable();
            $table->string('grado_formacion', 255)->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->string('carrera', 255)->nullable();
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
        Schema::dropIfExists('certificacion');
    }
};
