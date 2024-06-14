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
        Schema::create('postgrado', function (Blueprint $table) {
            $table->id('id_postgrado');
            $table->string('postulacion', 225)->nullable();
            $table->string('programa', 225)->nullable();
            $table->string('titulo', 225)->nullable();
            $table->date('fecha');
            $table->bigInteger('id_hoja_vida')->unsigned();
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
        Schema::dropIfExists('postgrado');
    }
};
