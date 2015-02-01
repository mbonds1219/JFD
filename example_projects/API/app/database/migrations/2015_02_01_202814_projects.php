<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Projects extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Table for projects
		Schema::create('projects', function (Bluprint $table) {
			$table->increments('id');
			$table->string('description');
			$table->enum('difficulty_level', ['1', '2', '3', '4', '5'])
				->unsigned();
			$table->timestamps();
		})
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Drop Table
		Schema::drop('projects');
	}

}
