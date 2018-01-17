@extends('dependencias_blade.general')

@section('general')



    {{--verificamos que la tabla no este vacia--}}
    @if (!$tabla->isEmpty())
    {!!Form::open(['route'=>'inactivos.store'])!!}

    {{--Control de operaciones--}}
    <div class="max-width d-flex justify-content-center" >
      <bold>
        <h4 style="font-weight: bold" class="">Seleccione los articulos que desea asignar como inactivos</h4>
      </bold>
      <div class="subcontenido">
        {!!Form::token()!!}
      </div>
    </div>

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

    </table>
      <div class="form-group">
        {!!Form::label('Observacion','Observaciones')!!}
        {!!Form::textarea('Observacion','',['class'=>'form-control','rows'=>'5'])!!}
      </div>

      <div class="form-group">
        {!!Form::label('Fecha','Fecha')!!}
        {!!Form::date('Fecha',\Carbon\Carbon::now(),['class'=>'form-control','rows'=>'5'])!!}
      </div>

      <div class="">
        {!!Form::submit('Siguiente Paso',['class'=>'btn btn-primary'])!!}
      </div>

      {!!Form::close()!!}
    @else
      <h2>No se han encontrado registros de articulos</h2>
      <h4>Si desea registrar un articulo, <a href={{route('articulos.create')}}>por favor presione este enlace</a></h4>

    @endif


@endsection
