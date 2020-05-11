<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    protected $fillable = [
        'user_id','name', 'email', 'ph_no','address','photo','batch_id',
    ];

    public function Batch()
    {
    	return $this->belongsTo('App\Batch');
    }
    public function User()
    {
    	return $this->belongsTo('App\User');
    }

}
