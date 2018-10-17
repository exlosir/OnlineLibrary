<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('books'); // исправление ошибок при запуске миграции
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('author_id')->unsigned();
            $table->integer('genre_id')->unsigned();
            $table->integer('year');
            $table->timestamps();
        });
        
        Schema::table('books', function(Blueprint $table){
            $table->foreign('author_id')->references('id')->on('authors'); // связь с таблицей авторов
            $table->foreign('genre_id')->references('id')->on('genres'); // связь с таблицей жанров
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
