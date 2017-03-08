<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('options', function(Blueprint $table) {
		    $table->increments('id');
		    $table->string("name", 50)->unique();
		    $table->string("value");
		    $table->string("group_name");
		    $table->boolean("autoload");
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
	    Schema::dropIfExists('options');
    }
}
