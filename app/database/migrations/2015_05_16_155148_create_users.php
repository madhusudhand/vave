<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('user_id');
            $table->string('email',255)->unique();
            $table->string('password',64);
            $table->string('full_name');
            $table->enum('status', array('A','L'))->default('A'); // active, locked
            $table->string('signup_token', 30)->unique();
            $table->string('password_token', 30)->unique()->nullable();
            $table->timestamp('generated_at');
            
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
		Schema::drop('users');
	}

}
