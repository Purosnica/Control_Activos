<?php

namespace App\Http\Controllers\Articulos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class DependenciaController extends Controller
{
    //
    public function index(){
      $tabla = DB::table('dependencia')->get();

      return view('Articulos.dependencia',['tabla'=>$tabla]);
    }

    public function create(){
      return view('Crear.Articulos.crear_dependencia');
    }

    public function store(Request $request){
      DB::table('dependencia')
      ->insert(
        [
          'Nombre'=>$request->Nombre
        ]);

      return redirect()->route('dependencias.index');
    }

}
