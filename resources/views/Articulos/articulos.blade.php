@extends('dependencias_blade.general')

@section('general')

    {{--Control de operaciones--}}
    <div class="max-width" >
      <h2 style="text-align: center;">
        Lista de Articulos
      </h2>

    {!!Form::open(['route'=>'articulos.store'])!!}

<!-- creamos la ventana Modal -->


      <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog cascading-modal" role="document">
                  <!--Content-->
                  <div class="modal-content">

                      <!--Header-->
                      <div class="modal-header light-blue darken-3 white-text">
                          <h4 class="title"><i class="fa fa-pencil"></i>Lista de Articulos </h4>
                          <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>

                      <!--Body-->
                      <div class="modal-body mb-0">
                          <div class="md-form form-sm">
                              <i class="fa fa-envelope prefix"></i>
                              {!!Form::label('NumeroArt','Codigo de Articulo' )!!}
                                 {!!Form::text('NumeroArt', null,['class'=>'form-control','placeholder'=>'Ej.:657986'])!!}


                          </div>
                                            <div class="md-form form-sm">
                                              <i class="fa fa-pencil prefix"></i>
                                              {!!Form::label('DescripcionArt','Descripcion' )!!}
                                              {!!Form::text('DescripcionArt', null,['class'=>'form-control','placeholder'=>'Detalles del articulo'])!!}

                                            </div>
                                            <div class="md-form form-sm">
                                              <i class="fa fa-pencil prefix"></i>

                                              {!!Form::label('MarcaArt','Marca' )!!}
                                              {!!Form::text('MarcaArt', null,['class'=>'form-control','placeholder'=>'Ej.:Samsung'])!!}

                                            </div>
                                            <div class="md-form form-sm">
                                            <i class="fa fa-pencil prefix"></i>
                                              {!!Form::label('ModeloArt','Modelo' )!!}
                                              {!!Form::text('ModeloArt', null,['class'=>'form-control','placeholder'=>'Ej.:SM6254'])!!}

                                            </div>

                                            <div class="md-form form-sm">
                                            <i class="fa fa-pencil prefix"></i>

                                             {!!Form::label('SerieArt','# Serie' )!!}
                                             {!!Form::text('SerieArt', null,['class'=>'form-control','placeholder'=>'Ej.:2007S5214....'])!!}

                                            </div>

                                            <div class="md-form form-sm">

                                                  {!!Form::select('FacturaArt',$factura->pluck('Attachment','Id_factura'),null,['class'=>'form-control','placeholder'=>'Ej.:2007S5214....'])!!}
                                                  </div>

                                                  <div class="md-form form-sm">
                                                  <i class="fa fa-pencil prefix"></i>

                                                  {!!Form::select('centro_costo',$centro_costo->pluck('Codigo','Id_centro_costo'),null,['class'=>'form-control'])!!}

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

    @if (false)
      <div class="alert alert-success " role="alert">
        <button type="button" class="close" data-dismiss="alert">
          <span aria-hidden="true">&times;</span>
        </button>
        Se ha creado correctamente el producto
      </div>
    @endif



    {{--tabla articulos--}}
    <table class="table table-responsive table table-bordered">
      <thead>
        <tr>
          <th>Co Articulo</th>
          <th>Descripción</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th># Serie</th>
          <th>Factura</th>
          <th>Centro de costos</th>
          <th>Fecha Facturación</th>
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
            <td>{{$valor->Serie}}</td>
            <td>{{$valor->Attachment}}</td>
            <td>{{$valor->Codigo}}</td>
            <td>{{$valor->Fecha}}</td>
          </tr>
        @endforeach

      </tbody>
    @endif
  </table>




@endsection
