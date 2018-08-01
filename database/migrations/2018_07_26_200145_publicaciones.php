<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Publicaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('publicaciones', function (Blueprint $table) {
          $table->increments('id');
          $table->int('id_publicacion');
          $table->string('avatar')->nullable();
          $table->string('comentario');
          $table->string('activo');
          $table->rememberToken();
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
        Schema::dropIfExists('publicaciones');
    }
}
