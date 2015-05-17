<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionTypes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subscription_types', function(Blueprint $table)
		{
			$table->increments('st_id');
            
            //subscription type info
            $table->string('type_name', 100);
            $table->string('type', 100);
            $table->boolean('default')->default(true);
            
            $table->integer('list_id')->unsigned();
            $table->foreign('list_id')->references('list_id')->on('lists');
            
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
		Schema::drop('subscription_types');
	}

}
