@extends('dependencias_blade.general')

@section('general')

    {{--Control de operaciones--}}
    <div class="max-width" >
      <h2 style="text-align: center;">
        Lista de Activos
      </h2>
  {!!Form::open(['route'=>'activos.store'])!!}

<!-- creamos la ventana Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Agregar Activos</h4>
      </div>
      <div class="modal-body">






   <div class="form-group">
   {!!Form::label('NumeroArt','Codigo de Articulo' )!!}
      {!!Form::text('NumeroArt', null,['class'=>'form-control','placeholder'=>'Ej.:657986'])!!}

      {!!Form::label('DescripcionArt','Descripcion' )!!}
      {!!Form::text('DescripcionArt', null,['class'=>'form-control','placeholder'=>'Detalles del articulo'])!!}

      {!!Form::label('MarcaArt','Marca' )!!}
      {!!Form::text('MarcaArt', null,['class'=>'form-control','placeholder'=>'Ej.:Samsung'])!!}


       {!!Form::label('ModeloArt','Modelo' )!!}
      {!!Form::text('ModeloArt', null,['class'=>'form-control','placeholder'=>'Ej.:SM6254'])!!}

      {!!Form::label('SerieArt','# Serie' )!!}
      {!!Form::text('SerieArt', null,['class'=>'form-control','placeholder'=>'Ej.:2007S5214....'])!!}




  </div>



  {!!Form::submit('Guardar en la Base de Datos',['class'=>'btn btn-primary'])!!}

    {!!Form::close()!!}
</form>





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Termina la ventana Modal -->




  <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                         <a href="#" data-toggle="modal" data-target="#myModal">
                            <i class="material-icons">control_point</i>
                        </div>
                        <div class="content">
                            <div class="text">Agregar Articulo</div></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">edit</i>
                        </div>
                        <div class="content">
                            <div class="text">Editar</div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">find_in_page</i>
                        </div>
                        <div class="content">
                            <div class="text">Buscar</div>

                        </div>
                    </div>
                </div>

            </div>




    </div>




    <table class="table table-striped">
      <thead>
        <tr>
          <th>Co Articulo</th>
          <th>Descripción</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Empleado</th>
          <th>Lugar</th>
          <th>Fecha Asignación</th>
        </tr>
      </thead>

    {{--verificamos que la tabla no este vacia--}}
    @if (!$tabla->isEmpty())
      <tbody>
        @foreach ($tabla as $valor)
          <tr>
            <td>{{$valor->Co_articulo}}</td>
            <td>{{$valor->Descripcion}}</td>
            <td>{{$valor->Marca}}</td>
            <td>{{$valor->Modelo}}</td>
            <td>{{$valor->Empleado}}</td>
            <td>{{$valor->Lugar}}</td>
            <td>{{$valor->Fecha_asignacion}}</td>
          </tr>
        @endforeach

      </tbody>
    @endif
  </table>

  <script >

  $('#modal1').modal('open');
</script>

@endsection
