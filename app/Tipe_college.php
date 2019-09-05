<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe_college extends Model
{
    protected $table = 'tipe_colleges';
     
    public function college()
    {
        return $this->belongsTo('App\College');
    }
}