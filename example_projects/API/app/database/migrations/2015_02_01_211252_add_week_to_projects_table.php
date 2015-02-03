<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWeekToProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Add weeks column to projects table
		Schema::table('projects', function($table) {
			$table->integer('week_id')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Drop Week_id column
		Schema::table('projects', function ($table) {
			$table->dropColumn('week_id');
		});
	}

}
