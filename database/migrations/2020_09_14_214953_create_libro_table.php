<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroTable extends Migration
{
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',60);
            $table->string('autor',60);
            $table->string('editorial',60);
            $table->string('calificacion',60);
            $table->string('resena',120);
        });
    }
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
