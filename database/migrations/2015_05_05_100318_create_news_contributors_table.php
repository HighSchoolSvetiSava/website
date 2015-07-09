<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsContributorsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_contributors', function(Blueprint $table)
        {
            $table->increments('id');
            $table->boolean('is_creator');
            $table->integer('news_id')->unsigned();
            $table->foreign('news_id')
                ->references('id')->on('news')
                ->onDelete('Cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('Cascade');
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
        Schema::drop('news_contributors');
    }
}
