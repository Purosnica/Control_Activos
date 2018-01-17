@extends('dependencias_blade.general')

@section('general')

    {{--Control de operaciones--}}
    <div class="max-width" >
      <h2 class"">
        Agregar Nuevo Articulo
      </h2>

      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
      <input type="text" name="nombre" id="nombre" value="Texto inicial">
      <input type="text" name="nombre" id="nombre" value="Texto inicial">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    </div>





    {!!Form::open(['route'=>'empleados.store'])!!}
    <div class="form-group">




     
      {!!Form::text('Codigo', null,['class'=>'form-control','placeholder'=>'Ej.:354F2015'])!!}

      {!!Form::label('Nombre1','Nombres' )!!}
      {!!Form::text('Nombre1', null,['class'=>'form-control','placeholder'=>'Ej.:Mario Emilio'])!!}

      {!!Form::label('Apellido1','Apellidos' )!!}
      {!!Form::text('Apellido1', null,['class'=>'form-control','placeholder'=>'Ej.: Leiva Lezcano'])!!}

      {!!Form::label('Estado','Estado' )!!}
      {!!Form::select('Estado',['Activo'=>'Activo','Inactivo'=>'Inactivo'],null,['class'=>'form-control'])!!}

      {!!Form::label('Ocupacion','Ocupacion' )!!}
      {!!Form::select('Ocupacion',$tabla->pluck('Nombre','Id_ocupacion'),null,['class'=>'form-control'])!!}

    </div>

    {!!Form::submit('Guardar en la Base de Datos',['class'=>'btn btn-primary'])!!}

    {!!Form::close()!!}


@endsection
