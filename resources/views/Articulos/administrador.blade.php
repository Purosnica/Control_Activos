@extends('dependencias_blade.general')

@section('general')

  {{--Control de operaciones--}}
  <div class="max-width" >
    <h2 class"">
      Lista de usuarios
    </h2>

  </div>

  <table class="table table-bordered">
    <thead class="thead-inverse">
      <tr>

        <th># Empleado</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Ocupación</th>
        <th>Estado Laboral</th>
        <th>Email</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($tabla as $info)
          <tr>
            <th>{{$info->Numero}}</th>
            <td>{{$info->Primer_nombre + $info->Segundo_nombre}}</td>
            <td>{{$info->Primer_apellido + $info->Segundo_apellido}}</td>
            <td>{{$info->Ocupacion}}</td>
            <td>{{$info->Estado}}</td>
            <td>{{$info->correo}}</td>
          </tr>
        @endforeach
    </tbody>
  </table>


@endsection
