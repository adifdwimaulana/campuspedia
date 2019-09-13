<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $table = 'majors';

    public function faculty() {
        return $this->belongsTo('App\Faculty');
    }

    public function college()
    {
        return $this->belongsTo('App\College');
    }
}
