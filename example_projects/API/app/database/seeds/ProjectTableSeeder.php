<?php
namespace App\Database\Seeders;

use App\Models\Project;
use \Seeder;

class ProjectTableSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'title' => "Fizz Buzz",
            'description' => 'Code Kata. <br> fizz buzz <br> every number from 1 to 100 <br> if divisible by 3, print \'fizz\'<br> if divisible by 5, print \'buzz\'<br>- if divisible by 3 && 5, print \'fizzbuzz\'<br>- else, print the number',
            'difficulty_level' => '3',
            'week_id' => '1'
        ]);
    }
}
