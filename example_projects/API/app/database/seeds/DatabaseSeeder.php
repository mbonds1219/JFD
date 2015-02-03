<?php

use \Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('App\Database\Seeders\StudentTableSeeder');
        $this->call('App\Database\Seeders\WeekTableSeeder');
        $this->call('App\Database\Seeders\ProjectTableSeeder');
    }
}
