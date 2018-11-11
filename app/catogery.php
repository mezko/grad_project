<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catogery extends Model
{
    protected $table ="catogeries";
    public function sevice()
    {
        return $this->belongsToMany('App\sevice')->withTimestamps();
    }

}
