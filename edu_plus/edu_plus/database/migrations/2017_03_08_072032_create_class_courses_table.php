<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Class_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('courses_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('money');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('courses_id')->references('id')->on('courses');
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
         Schema::drop('Class_courses');
    }
}
