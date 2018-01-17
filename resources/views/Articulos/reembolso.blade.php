@extends('dependencias_blade.general')

@section('general')

  {{--Control de operaciones--}}
  <div class="max-width" >
    <h2 style="text-align: center;">
      Lista de Reembolsos
    </h2>

    {!!Form::open(['route'=>'reembolsos.store'])!!}


    <!-- creamos  la ventana Modal  FALTA CREAR LA CLASE PARA REGISTRAR -->

                  <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog cascading-modal" role="document">
                              <!--Content-->
                              <div class="modal-content">

                                  <!--Header-->
                                  <div class="modal-header light-blue darken-3 white-text">
                                      <h4 class="title"><i class="fa fa-pencil"></i>Agregar Reembolso </h4>
                                      <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>

                                  <!--Body-->
                                  <div class="modal-body mb-0">
                                      <div class="md-form form-sm">
                                          <i class="fa fa-envelope prefix"></i>
                                          {!!Form::label('Codigo','Codigo reembolso')!!}
                                          {!!Form::text('Codigo','',['class'=>'form-control','rows'=>'5'])!!}

                                      </div>

                                        <div class="md-form form-sm">
                                          <i class="fa fa-pencil prefix"></i>

                                          {!!Form::label('Informe','Informe de reembolso')!!}
                                          {!!Form::text('Informe','',['class'=>'form-control','rows'=>'5'])!!}
                                        </div>

                                      <div class="md-form form-sm">
                                        <i class="fa fa-pencil prefix"></i>
                                        {!!Form::label('Fecha','Fecha')!!}
                                        {!!Form::date('Fecha',\Carbon\Carbon::now(),['class'=>'form-control','rows'=>'5'])!!}
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
                            <div class="text">Agregar Reembolso</div></a>

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

  <table class="table table-bordered">
    <thead class="thead-inverse">
      <tr>
        <th># Articulo</th>
        <th>Descripcion</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Serie</th>
        <th>Fecha inactivo</th>
        <th>Observación inactivo</th>
        <th>Informe</th>
        <th>Fecha informe</th>

      </tr>
    </thead>
    <tbody>
      <input type="hidden" name="" value="{{$i=0}}">
      @foreach ($tabla as $info)
        <tr>
          <th>{{$info->Co_articulo}}</th>
          <td>{{$info->Descripcion}}</td>
          <td>{{$info->Marca}}</td>
          <td>{{$info->Modelo}}</td>
          <td>{{$info->Serie}}</td>
          <td>{{$info->Fecha}}</td>
          <td>{{$info->Observacion}}</td>
          <td>{{$info->Informe}}</td>
          <td>{{$info->Fecha_reembolso}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>


@endsection
