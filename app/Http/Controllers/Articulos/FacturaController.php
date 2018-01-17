<?php

namespace App\Http\Controllers\Articulos;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index(){
      $tabla = DB::table('factura')->get();
      return view('Articulos.factura',['tabla'=>$tabla]);
    }

    public function create(){
      return view('Crear.Articulos.crear_factura');
    }

    public function store(Request $request){
      DB::table('factura')
      ->insert
      ([
        'Co_factura'=>$request->Codigo,
        'Attachment'=>$request->Descripcion,
        'Fecha'=>$request->Fecha
      ]);

      return redirect()->route('factura.index');

    }
}
