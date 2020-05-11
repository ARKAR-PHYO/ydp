<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'fee', 'duration','place','info',
    ];
}
