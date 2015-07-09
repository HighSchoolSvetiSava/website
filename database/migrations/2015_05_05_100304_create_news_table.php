<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->longText('content');
            $table->boolean('is_deleted');
            $table->integer('views_guests');
            $table->integer('views_users');
            $table->integer('section_id')->unsigned();
            $table->foreign('section_id')
                ->references('id')->on('news_sections')
                ->onDelete('Cascade');
            $table->integer('picture_id')->unsigned();
            $table->foreign('picture_id')
                ->references('id')->on('pictures')
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
        Schema::drop('news');
    }

}
