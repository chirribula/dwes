<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaEntrada extends Model

{
   protected $table='categoriaentrada';

   public function entrada()
   {
       return $this->hasMany('App\Entrada')->orderBy('id','desc');
   }


}
