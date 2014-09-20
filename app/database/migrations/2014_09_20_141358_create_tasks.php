<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasks extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function($table)
	{
			$table->increments('id');
			$table->string('title');
			$table->text('body');
			$table->integer('user_id');
			$table->boolean('done');
			$table->timestamps();
			
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	    Schema::drop('tasks');
	}

}
