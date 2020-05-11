<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable = [
        'name', 'start_date', 'end_date','course_id',
    ];
    public function Course()
    {
    	return $this->belongsTo('App\Course');
    }
}
