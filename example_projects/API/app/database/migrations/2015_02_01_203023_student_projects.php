<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentProjects extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create table to show off projects
		Schema::create('student_projects', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('student_id')->unsigned();
			$table->integer('week_id')->unsigned();
			$table->integer('project_id')->unsigned();
			$table->string('body');
			$table->timestamps();

			$table->foreign('student_id')
				->references('id')->on('students');

			$table->foreign('week_id')
				->references('id')->on('weeks');

			$table->foreign('project_id')
				->references('id')->on('projects');
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
		Schema::drop('student_projects');
	}

}
