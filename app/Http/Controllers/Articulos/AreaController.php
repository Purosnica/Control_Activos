<?php

namespace App\Http\Controllers\Articulos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class AreaController extends Controller
{
    //

    public function index(){

      $tabla = DB::table('area')->get();

      return view('Articulos.area',['tabla'=>$tabla]);
    }

    public function create(){
      return view('Crear.Articulos.crear_area');
    }

    public function store(Request $request){
      DB::table('area')
      ->insert(
      [
        'Nombre'=>$request->Nombre
      ]);

      return redirect()->route('areas.index');
    }
}
