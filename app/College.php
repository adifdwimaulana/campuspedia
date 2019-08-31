<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Faculty;
use App\Major;
use App\Province;

class College extends Model
{
    protected $table = 'colleges';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function faculties() 
    {
        return $this->hasMany('App\Faculty');
    }

    public function provinces()
    {
        return $this->hasMany('App\Province');
    }
}
