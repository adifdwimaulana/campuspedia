<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public function college() 
    {
        return $this->belongsTo('App\College');
    }
}
