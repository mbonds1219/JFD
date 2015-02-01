<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Students extends Migration {

	  /**
	   * Run the migrations.
	   *
	   * @return void
	   */
	  public function up()
	  {
	    // Make table for students
	    Schema::create('students', function (Blueprint $table) {
	    	$table->increments('id');
	    	$table->string('first_name', 50);
	    	$table->string('last_name', 50);
			$table->string('bio')->nullable();
			$table->integer('age');
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
		Schema::drop('students');
	  }

}
