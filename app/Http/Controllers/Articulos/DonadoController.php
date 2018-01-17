<?php

namespace App\Http\Controllers\Articulos;
use App\Http\Controllers\Controller;
use DB;


use Illuminate\Http\Request;

class DonadoController extends Controller
{
  public function index(){
    $tabla = DB::table('donacion')
    ->join('inactivo','inactivo.Id_articulo','=','donacion.Id_articulo')
    ->join('articulo','articulo.Id_articulo','=','inactivo.Id_articulo')
    ->join('observacion','observacion.Id_observacion','=','donacion.Id_observacion')
    ->select('donacion.*','articulo.*','observacion.Descripcion as Observacion')
    ->get();
    return view('Articulos.donado',['tabla'=>$tabla]);
  }

  public function create(){
    $tabla = DB::table('inactivo')
    ->join('articulo','articulo.Id_articulo','=','inactivo.Id_articulo')
    ->join('observacion','observacion.Id_observacion','=','inactivo.Id_observacion')
    ->select('articulo.*','observacion.Descripcion as Observacion','inactivo.Fecha')
    ->get();

    return view('Crear.Articulos.crear_donado')->with('tabla', $tabla);
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
      DB::table('donacion')
      ->insert([
        'Id_articulo'=>$dato,
        'Fecha'=>$request->Fecha,
        'Id_observacion'=>$id
      ]);
    }


    return redirect()->route('donados.index');

  }


}
