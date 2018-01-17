@extends('dependencias_blade.general')

@section('general')

    {{--Control de operaciones--}}
    <div class="max-width" >


      <h2 class"">
        Agregar Nuevo Articulo
      </h2>


    </div>

    {!!Form::open(['route'=>'articulos.store'])!!}
    <div class="form-group">



<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
      {!!Form::label('NumeroArt','Codigo de Articulo' )!!}
      {!!Form::text('NumeroArt', null,['class'=>'form-control','placeholder'=>'Ej.:657986'])!!}

      {!!Form::label('DescripcionArt','Descripcion' )!!}
      {!!Form::text('DescripcionArt', null,['class'=>'form-control','placeholder'=>'Detalles del articulo'])!!}

      {!!Form::label('MarcaArt','Marca' )!!}
      {!!Form::text('MarcaArt', null,['class'=>'form-control','placeholder'=>'Ej.:Samsung'])!!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    

     

      {!!Form::label('ModeloArt','Modelo' )!!}
      {!!Form::text('ModeloArt', null,['class'=>'form-control','placeholder'=>'Ej.:SM6254'])!!}

      {!!Form::label('SerieArt','# Serie' )!!}
      {!!Form::text('SerieArt', null,['class'=>'form-control','placeholder'=>'Ej.:2007S5214....'])!!}

      {!!Form::label('FacturaArt','Factura' )!!}
      {!!Form::select('FacturaArt',$factura->pluck('Attachment','Id_factura'),null,['class'=>'form-control'])!!}

      {!!Form::label('centro_costo','Centro de costos' )!!}
      {!!Form::select('centro_costo',$centro_costo->pluck('Codigo','Id_centro_costo'),null,['class'=>'form-control'])!!}

    </div>

    {!!Form::submit('Guardar en la Base de Datos',['class'=>'btn btn-primary'])!!}

    {!!Form::close()!!}


@endsection
