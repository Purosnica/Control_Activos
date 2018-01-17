@extends('dependencias_blade.general')

@section('general')

      {{--Control de operaciones--}}
      <div class="max-width" >
        <h2 class"">
          Agregar Nuevo Lugar
        </h2>
      </div>

      {!!Form::open(['route'=>'factura.store'])!!}
      <div class="form-group">


        {!!Form::label('Codigo','Código de factura') !!}
        {!!Form::text('Codigo', null,['class'=>'form-control','placeholder'=>'Ej.: 2015FA87'])!!}


        {!!Form::label('Descripcion','Factura') !!}
        {!!Form::text('Descripcion', null,['class'=>'form-control','placeholder'=>'Aquí va el Attachment'])!!}

        {!!Form::label('Fecha','Fecha de facturación' )!!}
        {!!Form::date('Fecha', \Carbon\Carbon::now())!!}


      </div>

      {!!Form::submit('Guardar en la Base de Datos',['class'=>'btn btn-primary'])!!}

      {!!Form::close()!!}
@endsection
