<?php

namespace App\Http\Controllers\Articulos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class EmpleadoController extends Controller
{
    //
    public function index(){
      $tabla = DB::table('empleado')
      ->join('ocupacion','empleado.Id_ocupacion','=','ocupacion.Id_ocupacion')
      ->select('ocupacion.Nombre as Ocupacion','empleado.*')

      ->get();
        $tabla1 = DB::table('ocupacion')->get();

      return view('Articulos.empleado',['tabla'=>$tabla,'tabla1'=>$tabla1]);
    }

    public function create(){
      $tabla = DB::table('ocupacion')->get();

      return view('Crear.Articulos.crear_empleado',['tabla'=>$tabla]);
    }

    public function store(Request $request){

      /*En esta parte se obtiene el primer y segundo nombre en un mismo Array
        de la misma manera obtenemos los apellidos
      */

      //separamos esos dos string (nombres,apellidos) obtenidos y los ..
      //..almacenamos en otras variables separando el primer y segundo nombre..
      //..asi mismo con los apellidos.
      //.....[-nemesio--leiva].......


      //esta expresion regular indica que sera valido todos
      $expresion_regular = '/[\s]+/';

      $nombres = preg_split($expresion_regular, $request->Nombre1);
      $apellidos = preg_split($expresion_regular, $request->Apellido1);

      if(count($nombres)<2){
        $nombres[1]='';
      }
      if(count($apellidos)<2)
        $apellidos[1]='';

      DB::table('empleado')
      ->insert
      ([
        'Co_empleado'=>$request->Codigo,
        'Primer_nombre'=> $nombres[0],
        'Segundo_nombre'=> $nombres[1],
        'Primer_apellido'=> $apellidos[0],
        'Segundo_apellido'=> $apellidos[1],
        'Estado'=>$request->Estado,
        'Id_ocupacion'=>$request->Ocupacion

      ]);

      return redirect()->route('empleados.index');
    }
}
