<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Weeks extends Migration
{

	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		// Make Table for JFD
		Schema::create('weeks', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('number');
			$table->string('subject', 25);
			$table->string('description');
			$table->integer('project')->unsigned();
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
		// Remove Table
		Schema::drop('weeks');
	}

}
