@extends('dependencias_blade.general')

@section('general')

  {!!Form::open(['route'=>'activos.create'])!!}

  {{--Control de operaciones--}}
  <div class="max-width" >
    <h4 class"">
      Seleccione el lugar donde estarán sus articulos
    </h4>


    <div class="subcontenido">
      {!!Form::token()!!}
    </div>
  </div>

  <table class="table">
    <thead class="thead-inverse">
      <tr>
        <th></th>
        <th>#</th>
        <th>Nombre del Lugar</th>
        <th>Dependencia</th>
        <th>Area</th>
      </tr>
    </thead>

    <input type="hidden" name="button" value="{{$i=0}}"></input>


    <tbody>
      @foreach ($tabla as $info)
        <tr>
          <th>
            {!!Form::radio(('Id'),$info->Id_lugar)!!}
          </th>
          <th>{{++$i}}</th>
          <td>{{$info->Nombre}}</td>
          <td>{{$info->Dependencia}}</td>
          <td>{{$info->Area}}</td>
        </tr>
      @endforeach
    </tbody>

  </table>

  {!!Form::submit('Siguiente Paso', ['class'=>'espaciado btn btn-primary'])!!}

  {!!Form::close()!!}

@endsection
