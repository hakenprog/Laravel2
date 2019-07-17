<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
        protected $primaryKey = 'id_Conductor';

    
    public function taxis(){ 

   return $this->hasOne('App\Taxi', 'id_Conductor'); 

} 
    
        public function empleado(){ 

   return $this->belongsTo('App\Empleado'); 

} 
    //
}
