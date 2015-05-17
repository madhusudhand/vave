<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListSubscribers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('list_subscribers', function(Blueprint $table)
		{
			$table->increments('ls_id');
            
            //campaign info
            $table->string('full_name', 100);
            $table->string('email', 500)->nullable();
            $table->enum('status',['V','B','S'])->default('V');
                    // V: valid, B: bounced, S: marked-as-spam
            
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
		Schema::drop('list_subscribers');
	}

}
