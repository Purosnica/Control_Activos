@extends('dependencias_blade.general')

@section('general')

    {{--Control de operaciones--}}
    <div class="max-width" >
      <h2 class"">
        Lista de Articulos
      </h2>
      <div class="subcontenido">
        <a href="{{route('destruidos.create')}}" class="espaciado btn btn-primary ">Agregar Articulo</a>
        <a href="#" class="espaciado btn btn-primary ">Editar</a>
        <a href="#" class="espaciado btn btn-primary ">Consultar</a>
      </div>
    </div>


    <table class="table table-striped">
      <thead>
        <tr>
          <th># Articulo</th>
          <th>Descripción</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Observación</th>
          <th>Fecha</th>
        </tr>
      </thead>

    {{--verificamos que la tabla no este vacia--}}
    @if (!$tabla->isEmpty())
      <tbody>
        @foreach ($tabla as $valor)
          <td>{{$valor->No_articulo}}</td>
          <td>{{$valor->Descripcion}}</td>
          <td>{{$valor->Marca}}</td>
          <td>{{$valor->Modelo}}</td>
          <td>{{$valor->Observacion}}</td>
          <td>{{$valor->Fecha}}</td>
        @endforeach

      </tbody>
    @endif
  </table>

@endsection
