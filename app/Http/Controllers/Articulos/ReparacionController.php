<?php

namespace App\Http\Controllers\Articulos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ReparacionController extends Controller
{
    //
    public function index(){
      $tabla = DB::table('reparacion')
      ->join('Inactivo_reparacion','reparacion.Id_reparacion','=','Inactivo_reparacion.Id_reparacion')
      ->join('inactivo','inactivo.Id_articulo','=','Inactivo_reparacion.Id_articulo')
      ->join('articulo','articulo.Id_articulo','=','inactivo.Id_articulo')
      ->join('observacion','observacion.Id_observacion','=','inactivo.Id_observacion')
      ->select
        (
          'Articulo.*',
          'Inactivo.Fecha as Fecha_inactivo',
          'observacion.Descripcion as Observacion',
          'reparacion.*'

        )


      ->get();
      return view('Articulos.reparacion',['tabla'=>$tabla]);
    }


    public function create(){
      $tabla = DB::table('inactivo')
      ->join('articulo','articulo.Id_articulo','=','inactivo.Id_articulo')
      ->join('observacion','observacion.Id_observacion','=','inactivo.Id_observacion')
      ->select('articulo.*','observacion.Descripcion as Observacion','inactivo.Fecha')
      ->get();

      return view('Crear.Articulos.crear_reparacion')->with('tabla', $tabla);
    }


    public function store(Request $request){


      //return $request->Codigo;
      //guardamos datos en la tabla reparacion
      $id = DB::table('reparacion')
      ->insertGetId([
        'Co_reparacion'=>$request->Codigo,
        'Informe_tecnico'=>$request->Informe,
        'Fecha'=>$request->Fecha
      ]);

      //guardamos en la tabla Inactivo_reparacion
      foreach ($request->id as $dato) {
        # code...
        DB::table('inactivo_reparacion')
        ->insert([
          'Id_articulo'=>$dato,
          'Id_reparacion'=>$id
        ]);
      }


      return redirect()->route('reparaciones.index');
    }






}
