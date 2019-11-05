<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';

    public function province() 
    {
        return $this->belongsTo('App\College');
    }

    public function major()
    {
        return $this->belongsTo('App\Major');
    }
}
