@extends('dependencias_blade.general')

@section('general')



  {!!Form::open(['url'=>'activos/create/paso_2'])!!}
    {{--verificamos que la tabla no este vacia--}}
    @if (!$tabla->isEmpty())
    {{--Control de operaciones--}}
    <div class="max-width d-flex justify-content-center" >
      <bold>
        <h4 style="font-weight: bold" class="">Seleccione los articulos que desea asignar como activos</h4>
      </bold>
      <div class="subcontenido">
        {!!Form::token()!!}
      </div>
    </div>


    @if (false)
      <div class="alert alert-success " role="alert">
        <button type="button" class="close" data-dismiss="alert">
          <span aria-hidden="true">&times;</span>
        </button>
        Se ha creado correctamente el producto
      </div>
    @endif


    {{--tabla articulos--}}
    <table class="table table-striped">
      <thead>
        <tr>
          <th></th>
          <th>Co Articulo</th>
          <th>Descripción</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th># Serie</th>
          <th>Factura</th>
          <th>Fecha Facturación</th>
        </tr>
      </thead>
      <input type="hidden" name="" value={{$i=0}}>
      <tbody>
        @foreach ($tabla as $valor)
          <tr>
            <td>
              {!!Form::checkbox(('id').'[]',$valor->Id_articulo)!!}
            </td>
            <td>{{$valor->Co_articulo}}</td>
            <td>{{$valor->Descripcion}}</td>
            <td>{{$valor->Marca}}</td>
            <td>{{$valor->Modelo}}</td>
            <td>{{$valor->Serie}}</td>
            <td>{{$valor->Attachment}}</td>
            <td>{{$valor->Fecha}}</td>
          </tr>
        @endforeach

      </tbody>

    @else
      <h2>No se han encontrado registros de articulos</h2>
      <h4>Si desea registrar un articulo, <a href={{route('articulos.create')}}>por favor presione este enlace</a></h4>

    @endif
  </table>

    <div class="">
      {!!Form::submit('Siguiente Paso', ['class'=>'btn btn-primary'])!!}
    </div>

    {!!Form::close()!!}

@endsection
