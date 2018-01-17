<?php

namespace App\Http\Controllers\Articulos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ReembolsoController extends Controller
{
    //
    public function index(){
      $tabla = DB::table('reembolso')
      ->join('inactivo','reembolso.Id_articulo','=','inactivo.Id_articulo')
      ->join('observacion','inactivo.Id_observacion','=','observacion.Id_observacion')
      ->join('articulo','inactivo.Id_articulo','=','articulo.Id_articulo')
      ->select
      (
        'articulo.*',
        'observacion.Descripcion as Observacion',
        'reembolso.Informe',
        'reembolso.Fecha as Fecha_reembolso',
        'inactivo.Fecha'
      )
      ->get();
      return view('Articulos.reembolso',['tabla'=>$tabla]);
    }


    public function create(){
      $tabla = DB::table('inactivo')
      ->join('articulo','articulo.Id_articulo','=','inactivo.Id_articulo')
      ->join('observacion','observacion.Id_observacion','=','inactivo.Id_observacion')
      ->select('articulo.*','observacion.Descripcion as Observacion','inactivo.Fecha')
      ->get();

      return view('Crear.Articulos.crear_reembolso')->with('tabla', $tabla);
    }


    public function store(Request $request){
      //return $request->id;

      DB::table('reembolso')
      ->insert([
        'Co_reembolso'=> $request->Codigo,
        'Informe'=> $request->Informe,
        'Fecha'=> $request->Fecha,
        'Id_articulo'=>$request->id
      ]);


      return redirect()->route('reembolsos.index');
    }



}
