<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Week extends Eloquent
{
    protected $fillable = [
        'number',
        'subject',
        'description',
    ];

    protected $table = 'weeks';
    protected $connection = 'mysql';
}
