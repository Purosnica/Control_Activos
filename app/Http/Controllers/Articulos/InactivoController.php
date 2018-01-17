<?php

namespace App\Http\Controllers\Articulos;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;

class InactivoController extends Controller
{
    public function index(){
      $tabla = DB::table('inactivo')
      ->join('articulo','inactivo.Id_articulo','=','articulo.Id_articulo')
      ->join('observacion','observacion.Id_observacion','=','inactivo.Id_observacion')
      ->select('articulo.*','inactivo.Fecha','observacion.Descripcion as Observacion')
      ->get();
      return view('Articulos.inactivo',['tabla'=>$tabla]);
    }

    public function create(){
      $tabla = DB::table('articulo')
      ->join('factura','factura.Id_factura','=','articulo.Id_factura')
      ->get();
      return view('Crear.Articulos.crear_inactivo')->with('tabla', $tabla);
    }

    public function store(Request $request){

      //quitamos el token que viene en el array
      //array_pull($request, '_token');

      //obtenemos el array dentro del array id
      //$articulos = array_get($request,'id');
//      array_pull($request, 'id');

      //insertamos en la tabla observacion, la observacion para hacer referencia
      $id_observacion = DB::table('observacion')
      ->insertGetId([
        'Descripcion'=>$request->Observacion
      ]);

      //insertamos todos los articulos a la tabla inactivo
      foreach ($request->id as $dato) {
        # code...
        DB::table('inactivo')
        ->insert([
          'Id_articulo'=>$dato,
          'Id_observacion'=>$id_observacion,
          'Fecha' => $request->Fecha
        ]);


      }

      return redirect()->route('inactivos.index');
    }

    public function show(){}
}
