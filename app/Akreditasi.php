<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akreditasi extends Model
{
    protected $table = 'akreditasis';

    public function akreditasi()
    {
        return $this->belongsTo('App\College');
    }
}
