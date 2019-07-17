<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxi extends Model
{
        protected $primaryKey = 'id_Taxi';

    public function conductor(){ 

   return $this->belongsTo('App\Conductor', 'id_Conductor'); 

} 
    //
}
