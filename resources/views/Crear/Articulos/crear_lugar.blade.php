@extends('dependencias_blade.general')

@section('general')

    {{--Control de operaciones--}}
    <div class="max-width" >
      <h2 class"">
        Agregar Nuevo Lugar
      </h2>
    </div>

    {!!Form::open(['route'=>'lugares.store'])!!}
    <div class="form-group">

      {!!Form::label('Lugar','Lugar' )!!}
      {!!Form::text('Lugar', null,['class'=>'form-control','placeholder'=>'Ej.: Oficina General'])!!}

      {!!Form::label('Area','Area' )!!}
      {!!Form::select('Area',$area->pluck('Nombre','Id_area'),null,['class'=>'form-control'])!!}

      {!!Form::label('Dependencia','Dependencia' )!!}
      {!!Form::select('Dependencia',$dependencia->pluck('Nombre','Id_dependencia'),null,['class'=>'form-control'])!!}



    </div>

    {!!Form::submit('Guardar en la Base de Datos',['class'=>'btn btn-primary'])!!}

    {!!Form::close()!!}


@endsection
