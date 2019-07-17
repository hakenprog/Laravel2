<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App;

class PagesController extends Controller
{
    
    public function inicio(){
    $users = $users = DB::table('usuarios')
            ->join('empleados', 'usuarios.id:Usuario', '=', 'empleados.id_Usuario')
            ->join('conductors', 'empleados.id_Empleado', '=', 'conductors.id_Empleado')
            ->join('taxis', 'taxis.id_Conductor', '=', 'conductors.id_Conductor')
            ->select('Nombre', 'Apellido', 'NumTelf','Marca','Modelo')
            ->get(); 
 
     return view ('inicio', compact('users')); 
    }
    //
}
