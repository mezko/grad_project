<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sevice extends Model
{
   protected $table="sevices";
   public function cities()
   {
       return $this->belongsToMany('App\cities')->withTimestamps();;
   }
   public function catogery()
   {
       return $this->belongsToMany('App\catogery')->withTimestamps();
   }
}
