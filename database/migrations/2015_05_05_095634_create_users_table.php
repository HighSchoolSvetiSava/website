<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('email', 128);
            $table->string('password', 128);
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('status');
            $table->string('date_of_birth');
            $table->integer('gender');
            $table->boolean('email_confirmed');
            $table->boolean('user_confirmed');
            $table->integer('school_class_id')->unsigned();
            $table->foreign('school_class_id')
                ->references('id')->on('school_classes')
                ->onDelete('Cascade');
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
        Schema::drop('users');
    }

}
