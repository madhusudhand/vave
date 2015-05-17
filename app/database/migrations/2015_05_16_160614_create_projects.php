<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjects extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('proj_id');
            $table->string('proj_key', 32)->unique();
            
            //project info
            $table->string('proj_name', 100);
            $table->text('proj_desc')->nullable();
            $table->text('timezone');
            
            $table->string('from_email', 500);
            $table->string('from_name', 100);
            $table->string('reply_email', 500);
            
            //iam credentials
            $table->string('iam_access_key', 100);
            $table->string('iam_secret_key', 500);
            $table->string('iam_region', 20);
            
            // user who created the project
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('users');
            
            //common columns
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
		Schema::drop('projects');
	}

}
