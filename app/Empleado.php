<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
        protected $primaryKey = 'id_Empleado';

    public function conductors(){ 

   return $this->hasMany('App\Conductor'); 

} 
    
        public function usuario(){ 

   return $this->belongsTo('App\Usuario', 'id_Usuario'); 

} 
    //
}
