<?php

namespace App\Http\Controllers\Articulos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class OcupacionController extends Controller
{

  public function index()
  {
    $tabla = DB::table('ocupacion')->get();

    return view('Articulos.ocupacion',['tabla'=>$tabla]);
  }

  public function create(){
    return view('Crear.Articulos.crear_ocupacion');
  }

  public function store(Request $request)
  {
    DB::table('ocupacion')
    ->insert
    (
      ['Nombre'=>$request->Ocupacion]
    );
    return redirect()->route('ocupaciones.index');
  }

}
