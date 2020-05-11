<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name', 'email', 'ph_no','address','photo','batch_id','course_id',
    ];
}
