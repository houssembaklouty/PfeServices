<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');

            $table->integer('categorie')->unsigned();
            $table->integer('service')->unsigned();
            $table->foreign('categorie')->references('id')->on('categories');
            $table->foreign('service')->references('id')->on('services');

            $table->string('skills');
            $table->double('price', 8, 2);
            $table->text('description');
            $table->dateTime('date');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
