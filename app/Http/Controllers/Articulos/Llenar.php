<?php

namespace App\Http\Controllers\Articulos;

use Illuminate\Http\Request;
use App\DependenciaController;

use Barryvdh\DomPDF\Facade as PDF;
use DB;


class Llenar extends Controller
{

      Public function index(){
        $client= DependenciaController:: all
        return view('vista', compact('vista'));


      }


      public function pdf(){
        $client= DependenciaController:: all();

        $pdf = PDF::loadView('pdf.vista', compact('vista'));

        return $pdf->download('listado.pdf');

      }



    //
}
