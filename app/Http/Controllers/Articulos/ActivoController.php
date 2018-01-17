<?php

namespace App\Http\Controllers\Articulos;
use App\Http\Controllers\Controller;
use DB;
use Session;

use Illuminate\Http\Request;

class ActivoController extends Controller
{
    //
    public function index(){

        $tabla = DB::table('activo')
        ->join('articulo','activo.Id_articulo','=','articulo.Id_articulo')
        ->join('lugar','lugar.Id_lugar','=','activo.Id_lugar')
        ->join('empleado','empleado.Id_empleado','=','activo.Id_empleado')
        ->select('activo.*','articulo.*','empleado.primer_nombre as Empleado','lugar.Nombre as Lugar')
        ->get();
        return view('Articulos.activo',['tabla'=>$tabla]);
    }

///---------------------------Registro de un Activo---------------------///

    public function paso_1(){

        //olvidamos sesion
        Session::forget('lugares');
        Session::forget('articulos');


        //obtenemos la tabla articulo unida a la tabla factura para obtener info
        $tabla = DB::table('articulo')
        ->join('factura','articulo.Id_factura','=','factura.Id_factura')
        ->select('Id_articulo','Co_articulo','Descripcion','Marca','Modelo','Serie','Attachment','Fecha')
        ->get();

        return view('Crear.Articulos.Activo.crear_paso_1',['tabla'=>$tabla]);
    }

/// Esta funcion servira como transporte de informacion de una funcion a otra
    public function paso_2(Request $request){
      //$tabla = DB::table('lugar')->get();

      //guardamos datos de una session
      $variable = null;
      //eliminamos el campo toquen
      array_pull($request,'_token');


      $request =  array_get($request,'id');
      //guardamos en una variable de session los datos de la pagina anterior
      Session::put('articulos',$request);


      $tabla = DB::table('lugar')
      ->join('dependencia','lugar.Id_dependencia','=','dependencia.Id_dependencia')
      ->join('area','lugar.Id_area','=','area.Id_area')
      ->select([
        'lugar.*',
        'dependencia.Nombre as Dependencia',
        'area.Nombre as Area'
      ])
      ->get();

      return view('Crear.Articulos.Activo.crear_paso_2',['tabla'=>$tabla]);
    }


// esta funcion debe llevar la variable recibida en la funcion paso_2
// al igual que las otras variables..
    public function create(Request $request){
      array_pull($request,'_token');


      $request =  array_get($request,'Id');
      //guardamos en una variable de session los datos de la pagina anterior
      Session::put('lugares',$request);


      $tabla = DB::table('empleado')
      ->join('ocupacion','ocupacion.Id_ocupacion','=','empleado.Id_ocupacion')
      ->select([
        'empleado.*',
        'ocupacion.Nombre as Ocupacion',
      ])
      ->get();


      return view('Crear.Articulos.crear_activo',['tabla'=>$tabla]);
    }


///------------------------Final Registro Activo-----------------------////


    public function store(Request $request){


      array_pull($request,'_token');


      $empleado =  array_get($request,'Id_empleado');

      //obtenemos las variables de session
      $lugar = Session::get('lugares');
      $articulos = Session::get('articulos');

      //almacenamos en la base de datos


      foreach ($articulos as $dato ) {
        # code...
        DB::table('activo')
        ->insert([
          'Id_empleado'=>$empleado[0],
          'Id_lugar'=>$lugar[0],
          'Id_articulo'=>$dato
        ]);
      }


      //olvidamos sesion
      Session::forget('lugares');
      Session::forget('articulos');

      return redirect()->route('activos.index');
    }


    public function show(){

      return view('Crear.Articulos.crear_activo');
    }



}
