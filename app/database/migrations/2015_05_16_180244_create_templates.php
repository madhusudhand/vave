<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplates extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('templates', function(Blueprint $table)
		{
			$table->increments('tpl_id');
            $table->string('tpl_key', 32)->unique();
            
            //template info
            $table->string('tpl_name', 100);
            $table->string('tpl_desc', 500)->nullable();
            $table->longText('tpl_content')->nullable();
            
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
		Schema::drop('templates');
	}

}
