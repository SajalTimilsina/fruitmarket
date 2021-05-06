<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
     
   protected $hidden = [
       'password', 'remember_token',
   ];
   public function timetable()
  {
      return $this->belongsTo('App\Timetable');
  }
}
