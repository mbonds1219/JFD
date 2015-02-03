<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsernameToUserTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // add username column
        Schema::table('users', function ($table) {
            $table->string('username', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // remove column
        Schema::table('users', function ($table) {
            $table->dropColumn('username');
        });
    }

}
