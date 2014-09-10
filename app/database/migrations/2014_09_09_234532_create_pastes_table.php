<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePastesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pastes', function($table)
		{
		    $table->increments('id');
		    $table->dateTime('created_at');
		    $table->dateTime('updated_at');
		    $table->string('title');
		    $table->text('content');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
