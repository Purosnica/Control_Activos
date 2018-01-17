<?php

namespace App\Http\Controllers\Articulos;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class SubastadoController extends Controller
{
    public function index(){
      $tabla = DB::table('subastacion')
      ->join('inactivo','inactivo.Id_articulo','=','subastacion.Id_articulo')
      ->join('articulo','articulo.Id_articulo','=','inactivo.Id_articulo')
      ->join('observacion','observacion.Id_observacion','=','subastacion.Id_observacion')
      ->select('subastacion.*','articulo.*','observacion.Descripcion as Observacion')
      ->get();
      return view('Articulos.subastado',['tabla'=>$tabla]);
    }

    public function create(){
      $tabla = DB::table('inactivo')
      ->join('articulo','articulo.Id_articulo','=','inactivo.Id_articulo')
      ->join('observacion','observacion.Id_observacion','=','inactivo.Id_observacion')
      ->select('articulo.*','observacion.Descripcion as Observacion','inactivo.Fecha')
      ->get();

      return view('Crear.Articulos.crear_subastado')->with('tabla', $tabla);
    }

    public function store(Request $request){

      //guardamos la observacion de los inactivos subastados
      $id = DB::table('observacion')
      ->insertGetId([
        'Descripcion'=>$request->Observacion
      ]);

      //guardamos los inactivos en la tabla subastacion
      foreach ($request->id as $dato) {
        # code...
        DB::table('subastacion')
        ->insert([
          'Id_articulo'=>$dato,
          'Fecha'=>$request->Fecha,
          'Id_observacion'=>$id
        ]);
      }


      return redirect()->route('subastados.index');

    }
}
