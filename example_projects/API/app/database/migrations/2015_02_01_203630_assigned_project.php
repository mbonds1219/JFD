<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AssignedProject extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Table to reference for assigned projects
		Schema::create('assigned_projects', function (Blueprint $table) {
			$table->increments('id');
			$table->string('description');
			$table->string('solution');
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
		// Drop the table
		Schema::drop('assigned_projects');
	}

}
