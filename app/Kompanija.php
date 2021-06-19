<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kompanija extends Model
{
    protected $table = "kompanija";
    public $timestamps = false;

    public function automobili()
    {
        return $this->hasMany('App\Automobil');
    }
}
