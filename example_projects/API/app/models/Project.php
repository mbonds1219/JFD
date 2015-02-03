<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Project extends Eloquent
{
    protected $fillable = [
        'title',
        'description',
        'difficutly_level',
        'week_id'
    ];

    protected $table = 'projects';
    protected $connection = 'mysql';

    public function week()
    {
        return $this->hasOne('App\Models\Week');
    }

    public function solutions()
    {
        return $this->hasMany('App\Models\StudentSolution');
    }
}
