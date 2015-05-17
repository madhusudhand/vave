<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_users', function(Blueprint $table)
		{
			$table->increments('pu_id');
            
            $table->enum('role', array('A','M','G'))->default('M'); 
                // Admin, Moderator, Guest
            
            $table->integer('user_id')->length(10)->unsigned();
            $table->foreign('user_id')->references('user_id')->on('users');
            
            $table->integer('proj_id')->length(10)->unsigned();
            $table->foreign('proj_id')->references('proj_id')->on('projects');
            
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
		Schema::drop('project_users');
	}

}
