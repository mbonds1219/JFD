<?php
namespace App\Database\Seeders;

use App\Models\Student;
use \Seeder;

class StudentTableSeeder extends Seeder
{
    public function run()
    {
        Student::create(['email' => 'mbonds1219@gmail.com']);
        Student::create(['email' => 'reynolds.sharp@gmail.com']);
        Student::create(['email' => 'studentofstone@gmail.com']);
        Student::create(['email' => 'sonia@3c21design.com']);
        Student::create(['email' => 'mabolen@email.uark.edu']);
    }
}
