<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDemendesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demendes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('proposition');

            $table->integer('id_post')->unsigned();
            $table->foreign('id_post')->references('id')->on('posts');

            $table->bigInteger('id_jobeur')->unsigned();
            $table->foreign('id_jobeur')->references('id')->on('jobeurs');

            $table->double('price');
            $table->boolean('etat')->default(false);

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
        Schema::drop('demendes');
    }
}
