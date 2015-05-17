<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subscriptions', function(Blueprint $table)
		{
			$table->increments('sbn_id');
            
            //subscription info
            $table->integer('st_id')->unsigned();
            $table->foreign('st_id')->references('st_id')->on('subscription_types');
            $table->boolean('subscribed')->default(true);
            
            $table->integer('ls_id')->unsigned();
            $table->foreign('ls_id')->references('ls_id')->on('list_subscribers');
            
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
		Schema::drop('subscriptions');
	}

}
