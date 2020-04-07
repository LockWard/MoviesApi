<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('Titulo',300)->nullable()->default('Tittle');
            $table->string('Poster')->nullable()->default('URL not specified');
            $table->string('Trailer')->nullable()->default('URL not specified');
            $table->integer('RelaseYear')->nullable();
            $table->string('Director',300)->nullable()->default('Director not specified');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
