<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaigns extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('campaigns', function(Blueprint $table)
		{
			$table->increments('camp_id');
            $table->string('camp_key', 32)->unique();
            
            //campaign info
            $table->string('camp_name', 100);
            $table->string('camp_desc', 500)->nullable();
            $table->enum('status', ['DRFT','SCHE','SENT'])->default('DRFT');
                                // Draft, Scheduled, Sent
            $table->date('schedule_time')->nullable();
            
            
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
		Schema::drop('campaigns');
	}

}
