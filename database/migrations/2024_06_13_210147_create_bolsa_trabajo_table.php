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
        Schema::create('bolsa_trabajo', function (Blueprint $table) {
            $table->id('id_bolsa_trabajo');
            $table->bigInteger('id_institucion')->unsigned();
            $table->string('publicacion', 225)->nullable();
            $table->string('estado_bolsa', 225)->nullable();
            $table->date('fecha_inicio');
            $table->bigInteger('id_convenios')->unsigned();
            
            $table->foreign('id_institucion')
                ->references('id_institucion')
                ->on('instituciones')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->timestamps();

            $table->index('id_institucion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bolsa_trabajo');
    }
};
