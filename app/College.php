<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $table = 'colleges';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function faculties() 
    {
        return $this->hasMany('App\Faculty');
    }

    public function majors()
    {
        return $this->hasMany('App\Major');
    }

    public function province()
    {
        return $this->hasOne('App\Province', 'id', 'province_id');
    }

    public function tipe_college()
    {
        return $this->hasOne('App\Tipe_college', 'id', 'tipe_kampus_id');
    }

    public function akreditasi()
    {
        return $this->hasOne('App\Akreditasi', 'id', 'akreditasi_id');
    }
}
