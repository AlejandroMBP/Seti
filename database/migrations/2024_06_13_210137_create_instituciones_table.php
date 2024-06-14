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
        Schema::create('instituciones', function (Blueprint $table) {
            $table->id('id_institucion');
            $table->string('nombreInstitucion', 225)->nullable();
            $table->string('publicacion', 225)->nullable();
            $table->string('descripcion', 225)->nullable();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instituciones');
    }
};
