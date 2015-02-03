<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddChangeToWeeksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Remove project column
		Schema::table('weeks', function ($table) {
			$table->dropColumn('project');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Add projects column
		Schema::table('weeks', function ($table) {
			$table->integer('projects')->unsigned();
		});
	}

}
