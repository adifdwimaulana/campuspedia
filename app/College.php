<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Faculty;
use App\Major;

class College extends Model
{
    protected $table = 'colleges';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function faculties() {
        return $this->hasMany('App\Faculty');
    }

    // public function majors() {
    //     return $this->hasMany('App\Major');
    // }
}
