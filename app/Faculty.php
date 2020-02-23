<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'faculties';

    public function college() 
    {
        return $this->belongsTo('App\College');
    }

    public function majors() 
    {
        return $this->hasMany('App\Major');
    }
}