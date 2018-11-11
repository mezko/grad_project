<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cities extends Model
{
    protected $table="cities";
    public function sevice(){

            return $this->belongsToMany('App\sevice')->withTimestamps();

    }
}

