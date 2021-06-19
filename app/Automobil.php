<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automobil extends Model
{
    protected $table = "automobil";
    public $timestamps = false;

    public function kompanija()
    {
        return $this->belongsTo('App\Kompanija');
    }
}
