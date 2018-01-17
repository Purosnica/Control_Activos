<?php

namespace App\Http\Controllers\Articulos;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Support\Collection as Collection;

use Illuminate\Http\Request;

class DestruidoController extends Controller
{

  public function index(){
    $tabla = DB::table('eliminacion')
    ->join('inactivo','inactivo.Id_articulo','=','eliminacion.Id_articulo')
    ->join('articulo','articulo.Id_articulo','=','inactivo.Id_articulo')
    ->join('observacion','observacion.Id_observacion','=','eliminacion.Id_observacion')
    ->select('eliminacion.*','articulo.*','observacion.Descripcion as Observacion')
    ->get();
    return view('Articulos.destruido',['tabla'=>$tabla]);
  }

  public function create(){
    $tabla = DB::table('inactivo')
    ->join('articulo','articulo.Id_articulo','=','inactivo.Id_articulo')
    ->join('observacion','observacion.Id_observacion','=','inactivo.Id_observacion')
    ->select('articulo.*','observacion.Descripcion as Observacion','inactivo.Fecha')
    ->get();

    return view('Crear.Articulos.crear_destruido')->with('tabla', $tabla);
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
      DB::table('eliminacion')
      ->insert([
        'Id_articulo'=>$dato,
        'Fecha'=>$request->Fecha,
        'Id_observacion'=>$id
      ]);
    }


    return redirect()->route('destruidos.index');

  }


}
