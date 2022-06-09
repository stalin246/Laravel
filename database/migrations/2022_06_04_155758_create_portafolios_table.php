<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #Creacion de la tabla portafolios
        Schema::create('portafolios', function (Blueprint $table) {
            #Creacion de tablas
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('categoria');
            $table->string('imagen');
            $table->string('url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portafolios');
    }
};
