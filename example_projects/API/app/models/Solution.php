<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Solution extends Eloquent
{
    use SoftDeletingTrait;

    protected $fillable = [
        'student_id',
        'week_id',
        'project_id',
        'body'
    ];

    protected $dates = ['deleted_at'];

    protected $table = 'solutions';

    protected $connection = 'mysql';

    public function student()
    {
        return $this->hasOne('App\Models\Student');
    }

    public function week()
    {
        return $this-hasOne('App\Models\Week');
    }

    public function project()
    {
        return $this->hasOne('App\Models\Project');
    }
}
