<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $table='entrada';

   public function user()
   {
       return $this->belongsTo('App\User' , 'user_id');
   }
}
