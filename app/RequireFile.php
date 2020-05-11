<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequireFile extends Model
{
    protected $fillable = [
        'name', 'file','course_id','teacher_id',
    ];
}
