<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sistema de Control de Inventarios</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:600,800&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
<!-- Bootstrap material design mdb-->

<link href="css/nemecio/css/mdb.css" rel="stylesheet">
<link href="css/nemecio/css/style.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">
  <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>
<body  >
    <div class="overlay"></div>
    <!-- Top Bar -->
    <nav style="background-color:#48476E;" class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a style="background-color:#FFFFFF;"style="text-align: center;"  class="navbar-brand" href="{{url('empleados')}}">Sistema de Control de Inventario</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="{{ route('logout') }}" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">supervisor_account</i>  </a>

                        </ul>
                    </li>
                  </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section >
        <!-- Left Sidebar -->
        <aside style="background-color:#48476E;"  id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="css/loguis.png" width="48" height="48" alt="User" />
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div style="background-color:#48476E;" class="menu">
                <ul class="list">

                    <li class="active1">

                            <i class=" material-icons ">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li >
                        <a style="color:#FFFFFF;" href="{{url('empleados')}}">
                            <i class="material-icons">text_fields</i>
                            <span style="color:#FFFFFF;">Empleados</span>
                        </a>
                    </li>
                    <li >
                        <a style="color:#FFFFFF;" href="{{url('articulos')}}">
                            <i class="material-icons">layers</i>
                            <span style="color:#FFFFFF;">Articulos</span>
                        </a>
                    </li>
                     <li >
                        <a style="color:#FFFFFF;" href="{{url('activos')}}">
                            <i class="material-icons">layers</i>
                            <span style="color:#FFFFFF;">Activos</span>
                        </a>
                    </li>
                    <li >
                        <a style="color:#FFFFFF;" href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span style="color:#FFFFFF;">Bodega</span>
                        </a>
                        <ul class="ml-menu">
                            <li >
                                <a style="color:#FFFFFF;" href= "{{url('inactivos')}}">
                                    <span style="color:#FFFFFF;">Inactivos</span>
                                </a>
                            </li>
                            <li >
                                <a style="color:#FFFFFF;" href= "{{url('subastados')}}">
                                    <span style="color:#FFFFFF;">Subastado</span>
                                </a>

                            </li>
                            <li >
                                 <a style="color:#FFFFFF;" href="{{url('donados')}}">
                                    <span style="color:#FFFFFF;">Donacion</span>
                                </a>

                            </li>

                            <li >
                                <a style="color:#FFFFFF;" href="{{url('destruidos')}}" >
                                    <span style="color:#FFFFFF;">Eliminacion</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li >

                        <a style="color:#FFFFFF;" href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span style="color:#FFFFFF;">Ubicaciones</span>
                        </a>
                        <ul class="ml-menu">
                          <li >
                                  <a style="color:#FFFFFF;" href="{{url('dependencias')}}">Area</a>
                              </li>
                              <li >
                        <li >
                                <a style="color:#FFFFFF;" href="{{url('areas')}}">Area</a>
                            </li>
                            <li>
                                <a style="color:#FFFFFF;" href="{{url('lugares')}}">Lugar</a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a style="color:#FFFFFF;" href="{{('ocupaciones')}}" >
                            <i class="material-icons">assignment</i>
                            <span style="color:#FFFFFF;">Ocupacion</span>
                        </a>
                    </li>

                    <li >
                        <a  style="color:#FFFFFF;" href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">perm_media</i>
                            <span style="color:#FFFFFF;">Devoluciones</span>
                        </a>
                        <ul class="ml-menu">
                            <li >
                                <a style="color:#FFFFFF;" href="{{('reparaciones')}}"> Reparaciones</a>
                            </li>
                            <li >
                                <a style="color:#FFFFFF;" href="{{('reembolsos')}}">Cambios</a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a  style="color:#FFFFFF;" href="{{route('factura.index')}}">
                            <i class="material-icons">pie_chart</i>
                            <span style="color:#FFFFFF;">Facturas</span>
                        </a>
                    </li>
                    <li >
                        <a style="color:#FFFFFF;"  href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span style="color:#FFFFFF;">Reportes</span>
                        </a>
                        <ul class="ml-menu">
                            <li>

                            </li>
                            <li>

                            </li>
                            <li>

                        </ul>
                    </li>

                    <li  >
                        <a style="color:#FFFFFF;" href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span style="color:#FFFFFF;">Administrador</span>
                        </a>
                    </li>
                </ul>
            </div>
            <style>
            .menu{
              color:#FFFFFF;

            }




            </style>
            <!-- Final Menu  -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="javascript:void(0);">3T3-CO</a>.
                </div>
                <div class="version">1
                </div>
            </div>
            <!-- #Footer -->
        </aside>
    </section>
        <!-- Tablas de registros -->
    <section class="content">
        <div class="container-fluid">
        </div>
 <div class="contenido_web sangrias">
      @yield('general')

    </div >

    </section>

    <!-- Jquery Core Js -->
      <script src="{{ asset('js/app.js') }}"></script>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.js"></script>
    <script src="css/nemecio/js/popper.min.js"></script>
    <script src="css/nemecio/js/mdb.js"></script>
    <script src="css/nemecio/js/jquery-3.2.1.min.js">  </script>
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="js/admin.js"></script>

</body>

</html>
