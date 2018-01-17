@extends('dependencias_blade.general')

@section('general')

    {{--Control de operaciones--}}
    <div class="max-width" >
      <h2 class"">
        Agregar Nueva Ocupación
      </h2>
    </div>

    {!!Form::open(['route'=>'ocupaciones.store'])!!}
    <div class="form-group">

      {!!Form::label('Ocupacion','Ocupacion' )!!}
      {!!Form::text('Ocupacion', null,['class'=>'form-control','placeholder'=>'Ej.: Asistente'])!!}

    </div>

    {!!Form::submit('Guardar en la Base de Datos',['class'=>'btn btn-primary'])!!}

    {!!Form::close()!!}


@endsection
