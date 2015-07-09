<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectPageContributorsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_page_contributor', function(Blueprint $table)
        {
            $table->increments('id');
            $table->boolean('is_creator');
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')
                ->references('id')->on('subjects')
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
        Schema::drop('subject_page_contributor');
    }

}
