@extends('dependencias_blade.general')

@section('general')

  {{--Control de operaciones--}}
  <div class="max-width" >
    <h2 style="text-align: center;">
      Lista de Empleados
    </h2>

    {!!Form::open(['route'=>'empleados.store'])!!}
    <!-- creamos la ventana Modal  falta crear la clases para registrar los empleados-->


          <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog cascading-modal" role="document">
                      <!--Content-->
                      <div class="modal-content">

                          <!--Header-->
                          <div class="modal-header light-blue darken-3 white-text">
                              <h4 class="title"><i class="fa fa-pencil"></i>Agregar Empleados </h4>
                              <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>

                          <!--Body-->
                          <div class="modal-body mb-0">
                              <div class="md-form form-sm">
                                  <i class="fa fa-envelope prefix"></i>
                                    {!!Form::text('Codigo', null,['class'=>'form-control','placeholder'=>'Ej.:354F2015'])!!}

                              </div>

                                <div class="md-form form-sm">
                                  <i class="fa fa-pencil prefix"></i>

                                        {!!Form::label('Nombre1','Nombres' )!!}
                                        {!!Form::text('Nombre1', null,['class'=>'form-control','placeholder'=>'Ej.:Mario Emilio'])!!}

                                </div>

                              <div class="md-form form-sm">
                                <i class="fa fa-pencil prefix"></i>

                                      {!!Form::label('Apellido1','Apellidos' )!!}
                                      {!!Form::text('Apellido1', null,['class'=>'form-control','placeholder'=>'Ej.: Leiva Lezcano'])!!}

                              </div>

                            <div class="md-form form-sm">
                              <i class="fa fa-pencil prefix"></i>

                                    {!!Form::label('Estado','Estado' )!!}
                                    {!!Form::select('Estado',['Activo'=>'Activo','Inactivo'=>'Inactivo'],null,['class'=>'form-control'])!!}

                            </div>
                            <div class="md-form form-sm">
                              <i class="fa fa-pencil prefix"></i>
                              {!!Form::label('Ocupacion','Ocupacion' )!!}
                              {!!Form::select('Ocupacion',$tabla1->pluck('Nombre','Id_ocupacion'),null,['class'=>'form-control'])!!}
                            </div>


                              <div class="text-center mt-1-half">
                                {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}

                              </div>
                          </div>
                      </div>
                      <!--/.Content-->
                  </div>
              </div>











    <!-- Termina la ventana Modal -->

     <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                       <a href="#" data-toggle="modal" data-target="#modalContactForm">
                            <i class="material-icons">control_point</i>
                        </div>
                        <div class="content">
                            <div class="text">Agregar Empleado</div></a>

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

  <table class="table table-bordered">
    <thead class="thead-inverse">
      <tr>

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
            <th>{{$info->Co_empleado}}</th>
            <td>{{$info->Primer_nombre .' '. $info->Segundo_nombre}}</td>
            <td>{{$info->Primer_apellido .' '. $info->Segundo_apellido}}</td>
            <td>{{$info->Ocupacion}}</td>
            <td>{{$info->Estado}}</td>
          </tr>
        @endforeach
    </tbody>
  </table>


@endsection
