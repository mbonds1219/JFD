<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Student extends Eloquent
{
    protected $fillable = [
        'first_name',
        'last_name',
        'bio',
        'age',
        'email'
    ];

    protected $table = 'students';

    protected $connection = 'mysql';

    public function user()
    {
        return $this->hasOne('App\Models\User', 'student_id', 'id');
    }
}
