<?php

namespace App\Http\Controllers\Articulos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class AdministradorController extends Controller
{
    //
    public function index(){
      /*falta completar */
      $tabla = DB::table('empleado')
      ->join('ocupacion','empleado.Id_ocupacion','=','ocupacion.Id_ocupacion')
      ->join('administrador','administrador.Id_empleado','=','empleado.Id_empleado')
      ->select
      (
        'ocupacion.Nombre as Ocupacion',
        'empleado.*',
        'administrador.correo'
      )
      ->get();


      return view('articulos.administrador',['tabla'=>$tabla]);
    }
}
