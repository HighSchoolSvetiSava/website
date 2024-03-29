<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectPagesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_pages', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('page_name_menu');
            $table->longText('content');
            $table->integer('views_guests');
            $table->integer('views_users');
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')
                  ->references('id')->on('subjects')
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
        Schema::drop('subject_pages');
    }

}
