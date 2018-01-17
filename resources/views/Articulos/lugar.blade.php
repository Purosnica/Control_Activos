@extends('dependencias_blade.general')

@section('general')

  {{--Control de operaciones--}}
  <div class="max-width" >
    <h2 style="text-align: center;">
      Lista de lugares
    </h2>


        {!!Form::open(['route'=>'lugares.store','id'=>'formulario'])!!}

    <!-- creamos la ventana Modal  falta la clase para agreagar al formulario-->


          <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog cascading-modal" role="document">
                      <!--Content-->
                      <div class="modal-content">

                          <!--Header-->
                          <div class="modal-header light-blue darken-3 white-text">
                              <h4 class="title"><i class="fa fa-pencil"></i>Agregar Lugar </h4>
                              <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>

                          <!--Body-->
                          <div class="modal-body mb-0">
                              <div class="md-form form-sm">
                                  <i class="fa fa-envelope prefix"></i>
                                  {!!Form::label('Lugar','Lugar' )!!}
                                  {!!Form::text('Lugar', null,['class'=>'form-control','placeholder'=>'Ej.: Oficina General'])!!}

                              </div>


                              <div class="md-form form-sm">

                                {!!Form::select('Area',$area->pluck('Nombre','Id_area'),null,['class'=>'mdb-select'])!!}
                              </div>

                              <div class="md-form form-sm">
                                {!!Form::select('Dependencia',$dependencia->pluck('Nombre','Id_dependencia'),null,['class'=>'mdb-select'])!!}

                              </div>

                              <div class="text-center mt-1-half">
                                {!!Form::submit('Guardar',['class'=>'btn btn-primary','id'=>'btnenviar'])!!}

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
                            <div class="text">Agregar Lugar</div></a>

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
    <thead class="mdb-color white-1">
      <tr class="text-white">
        <th>#</th>
        <th>Nombre del Lugar</th>
        <th>Dependencia</th>
        <th>Area</th>
      </tr>
    </thead>

    <input type="hidden" name="button" value="{{$i=0}}"></input>

    <tbody>
      @foreach ($tabla as $info)
        <tr data-id="{{$info->id}}">
          <th>{{++$i}}</th>
          <td>{{$info->Lugar}}</td>
          <td>{{$info->Dependencia}}</td>
          <td>{{$info->Area}}</td>
          <td>
            <button type="button" class="btn peach-gradient btn-sm">
              <div class="icon">
                  <i class="Tiny material-icons"><a href="{{route('lugares.edit',$info->id)}}">edit</a>
                  </i>

              </div>
            </button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>




@endsection
