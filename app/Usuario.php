<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
 
    protected $primaryKey = 'id:Usuario';

    public function empleados(){ 

   return $this->hasOne('App\Empleado', 'id_Usuario'); 

} 
}
