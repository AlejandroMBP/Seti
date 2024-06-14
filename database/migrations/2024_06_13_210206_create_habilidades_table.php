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
        Schema::create('habilidades', function (Blueprint $table) {
            $table->id('id_habilidades');
            $table->string('nombre', 225)->nullable();
            $table->string('nivel', 225)->nullable();
            $table->string('descripcion', 225)->nullable();
            $table->bigInteger('id_hoja_vida')->unsigned();
            
            $table->foreign('id_hoja_vida')
                ->references('id_hoja_vida')
                ->on('hoja_de_vida')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->timestamps();

            $table->index('id_hoja_vida');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habilidades');
    }
};
