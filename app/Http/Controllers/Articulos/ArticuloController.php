<?php

namespace App\Http\Controllers\Articulos;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use DB;
use App\dependencias_blade;

class ArticuloController extends Controller
{


    public function index()
    {
      $tabla = DB::table('articulo')
      ->join('factura','articulo.Id_factura','=','factura.Id_factura')
      ->join('Centro_Costo','articulo.Id_centro_costo','=','Centro_Costo.Id_centro_costo')
      ->select(
        'articulo.Co_articulo','articulo.Descripcion',
        'articulo.Marca','articulo.Modelo','articulo.Serie','factura.Attachment',
        'factura.Fecha','Centro_Costo.Codigo'
        )
      ->get();


      $factura = DB::table('factura')
      ->select('Id_factura','Attachment')
      ->get();

        $centro_costo = DB::table('Centro_Costo')->get();


      return view('Articulos.articulos',['tabla'=>$tabla,'factura'=>$factura,'centro_costo'=>$centro_costo]);
    }

    public function create(){
      $factura = DB::table('factura')
      ->select('Id_factura','Attachment')
      ->get();

      //$tabla = $tabla[0]->Attachment;
      //return $tabla;
      $centro_costo = DB::table('Centro_Costo')->get();

      //return $tabla->pluck('No_factura','Attachment');

      return view('Crear.Articulos.crear_articulo')->with(['factura'=> $factura,'centro_costo'=>$centro_costo]);
    }

    public function store (Request $valor){

        //return $valor;
        DB::table('articulo')->insert(
          ['Co_articulo'=>$valor->NumeroArt,
          'Descripcion'=>$valor->DescripcionArt,
          'Marca'=>$valor->MarcaArt,
          'Modelo'=>$valor->ModeloArt,
          'Serie'=>$valor->SerieArt,
          'Id_factura'=>$valor->FacturaArt,
          'Id_centro_costo'=>$valor->centro_costo
        ]);

        $mensaje = 'Se ha registrado correctamente el articulo';

        return redirect('articulos')->with('Mensaje', ($mensaje.$valor->NumeroArt));
    }



}
