<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('users', function(Blueprint $table) {
		    $table->increments('id');
		    $table->string('name')->nullable();
		    $table->string('email', 50)->unique();
		    $table->string('password', 60)->nullable();
			
		    $table->string('second_email')->nullable();
		    $table->string('avatar')->nullable();
		    $table->string('first_name')->nullable();
		    $table->string('last_name')->nullable();
		    $table->boolean('is_men')->default(0);
		    $table->dateTime('date_of_birth')->nullable();
		    $table->string('identify_number')->nullable();
		
		    $table->string('address')->nullable();
		    $table->string('second_address')->nullable();
		    $table->string('mobile_phone')->nullable();
		    $table->string('second_mobile_phone')->nullable();
		    $table->string('skype')->nullable();
		    $table->string('url_website')->nullable();
		    $table->string('url_facebook')->nullable();
		    $table->string('url_twitter')->nullable();
		    $table->string('url_google_plus')->nullable();
		    $table->string('url_youtube')->nullable();
		    $table->string('url_github')->nullable();
		
		    $table->text('about')->nullable();
		    $table->text('interests')->nullable();
		
		    $table->boolean('require_changepass')->default(0);
		    $table->boolean('is_actived')->default(1);
		    $table->boolean('is_locked')->default(0);
		
		    $table->string('user_type')->default("user");
		    $table->string('secrect_code')->default(str_random(40));
		    $table->datetime('time_last_login')->nullable();
		    $table->datetime('time_begin_lock')->nullable();
		    $table->datetime('time_end_lock')->nullable();
		    $table->integer('user_created')->default(1);
		    $table->integer('user_edited')->default(1);
		
		    $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
