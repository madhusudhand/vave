<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLists extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lists', function(Blueprint $table)
		{
			$table->increments('list_id');
            $table->string('list_key', 32)->unique();
            
            //list info
            $table->string('list_name', 100);
            $table->string('list_desc', 500)->nullable();
            
            $table->integer('proj_id')->unsigned();
            $table->foreign('proj_id')->references('proj_id')->on('projects');
            
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
		Schema::drop('lists');
	}

}
