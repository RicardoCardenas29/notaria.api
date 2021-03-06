<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTipoTramite extends Migration
{

    public function up()
    {
        Schema::create('tipo_tramite', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->unique();
            $table->integer('valor');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_tramite');
    }
}
