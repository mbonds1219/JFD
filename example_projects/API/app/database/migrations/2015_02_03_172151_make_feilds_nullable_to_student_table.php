<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeFeildsNullableToStudentTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // make fields nullable
        Schema::table('students', function ($table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
        });

        Schema::table('students', function ($table) {
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // make fields nullable
        Schema::table('students', function ($table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
        });

        Schema::table('students', function ($table) {
            $table->string('first_name', 50);
            $table->string('last_name', 50);
        });
    }
}
