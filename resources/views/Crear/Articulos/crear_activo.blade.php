@extends('dependencias_blade.general')

@section('general')


  {!!Form::open(['route'=>'activos.store'])!!}

  {{--Control de operaciones--}}
  <div class="max-width" >





    <h4 class"">
      Seleccione el empleado que se hará cargo de los articulos
    </h4>


    <div class="subcontenido">
      {!!Form::token()!!}
    </div>
  </div>


  <table class="table">
    @yield('general')
    <thead class="thead-inverse">
      <tr>
        <th> </th>
        <th>Co Empleado</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Ocupación</th>
        <th>Estado Laboral</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($tabla as $info)
          <tr>
            <th>
              {!!Form::radio(('Id_empleado').'[]',$info->Id_empleado)!!}

            </th>
            <th>{{$info->Co_empleado}}</th>
            <td>{{$info->Primer_nombre .' '. $info->Segundo_nombre}}</td>
            <td>{{$info->Primer_apellido .' '. $info->Segundo_apellido}}</td>
            <td>{{$info->Ocupacion}}</td>
            <td>{{$info->Estado}}</td>
          </tr>
        @endforeach
    </tbody>
  </table>


{!!Form::submit('Guardar en la base de datos', ['class'=>'espaciado d-flex justify-content-end btn btn-primary'])!!}

{!!Form::close()!!}



@endsection
