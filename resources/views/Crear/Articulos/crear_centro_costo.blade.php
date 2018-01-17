@extends('dependencias_blade.general')

@section('general')

      {{--Control de operaciones--}}
      <div class="max-width" >
        <h2 class"">
          Agregar Nueva Area
        </h2>
      </div>

      {!!Form::open(['route'=>'centro de costos.store'])!!}
      <div class="form-group">


        {!!Form::label('Codigo','Codigo') !!}
        {!!Form::text('Codigo', null,['class'=>'form-control','placeholder'=>'Ej.: 201564F'])!!}

        {!!Form::label('Nombre','Centro de Costos') !!}
        {!!Form::text('Nombre', null,['class'=>'form-control','placeholder'=>'Centro de costos'])!!}



      </div>

      {!!Form::submit('Guardar en la Base de Datos',['class'=>'btn btn-primary'])!!}

      {!!Form::close()!!}
@endsection
