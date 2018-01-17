<?php

namespace App\Http\Controllers\Articulos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;


class LugarController extends Controller
{
    public function index(){
      $tabla = DB::table('lugar')
      ->join('Dependencia','lugar.Id_dependencia','=','Dependencia.Id_dependencia')
      ->join('Area','Area.Id_area','=','lugar.Id_area')
      ->select('lugar.Id_lugar as id','lugar.Nombre as Lugar','dependencia.Nombre as Dependencia','Area.Nombre as Area')
      ->get();


      $dependencia = DB::table('dependencia')->get();
      $area = DB::table('area')->get();

      return view('Articulos.lugar',['tabla'=>$tabla,'dependencia'=>$dependencia,'area'=>$area]);
    }

    public function create(){
      $dependencia = DB::table('dependencia')->get();
      $area = DB::table('area')->get();

      return view('Crear.Articulos.crear_lugar',['dependencia'=>$dependencia,'area'=>$area]);
    }
    public function edit($request){
        return $request.' fkladjflakjsdf';
    }

    public function store(Request $request){

      DB::table('lugar')
      ->insert
      ([
        'Nombre'=>$request->Lugar,
        'Id_area'=>$request->Area,
        'Id_dependencia'=>$request->Dependencia,

      ]);

      if($request->ajax()){
        return $request;
      }

      return redirect()->route('lugares.index');
    }
}
