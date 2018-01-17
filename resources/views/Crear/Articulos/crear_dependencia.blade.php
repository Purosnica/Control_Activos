@extends('dependencias_blade.general')

@section('general')

      {{--Control de operaciones--}}
      <div class="max-width" >
        <h2 class"">
          Agregar Nueva Dependencia
        </h2>
      </div>

      {!!Form::open(['route'=>'dependencias.store'])!!}
      <div class="form-group">


        {!!Form::label('Nombre','Nombre de dependencia') !!}
        {!!Form::text('Nombre', null,['class'=>'form-control','placeholder'=>'Ej.: Gerencia de pais'])!!}



      </div>

      {!!Form::submit('Guardar en la Base de Datos',['class'=>'btn btn-primary'])!!}

      {!!Form::close()!!}
@endsection
