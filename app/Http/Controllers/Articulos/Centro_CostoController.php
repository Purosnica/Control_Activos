<?php

namespace App\Http\Controllers\Articulos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use PDF;

class Centro_CostoController extends Controller
{
    //

    public function index(){
      $tabla = DB::table('centro_costo')->get();

      return view('Articulos.centro_costo',['tabla'=>$tabla]);
    }

    public function create(){

      return view('Crear.Articulos.crear_centro_costo');
    }

    public function store(Request $request){
      DB::table('centro_costo')
      ->insert([
        'Codigo'=>$request->Codigo,
        'Descripcion'=>$request->Nombre
      ]);

      return redirect()->route('centro de costos.index');
    }




}
