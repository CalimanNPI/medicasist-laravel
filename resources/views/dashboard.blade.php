<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Medicasist</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('/admin/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{asset('/admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('/admin/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion bg-primary" id="accordionSidebar" >

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="/admin/img/ico.png" width="100%" height="100%" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">
                    <img src="/admin/img/logo.png" width="100%" height="100%" alt="">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    <i class="fas fa-home"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menú
            </div>

            <!-- 
            <li class="nav-item">
                <a class="nav-link" href="{{route('users.index')}}">
                    <i class="fas fa-users"></i>
                    <span>Usuarios</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('citas.index')}}">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Citas</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('consulta.show') }}">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Mis Citas</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('personas.index')}}">
                    <i class="fas fa-user-injured"></i>
                    <span>Pacientes</span></a>
            </li>-->

            @if(Auth::user()->tipo_usu == 0)

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('users.index')}}">
                    <i class="fas fa-users"></i>
                    <span>Usuarios</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('personas.index')}}">
                    <i class="fas fa-user-injured"></i>
                    <span>Pacientes</span></a>
            </li>
            @endif


            @if(Auth::user()->tipo_usu == 1)

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('citas.index')}}">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Citas</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('consulta.show') }}">
                    <i class="fas fa-calendar-day"></i>
                    <span>Mis Citas</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('personas.index')}}">
                    <i class="fas fa-user-injured"></i>
                    <span>Pacientes</span></a>
            </li>
            @endif



            @if(Auth::user()->tipo_usu == 2)

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('citas.index')}}">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Citas</span></a>
            </li>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('personas.index')}}">
                    <i class="fas fa-user-injured"></i>
                    <span>Pacientes</span></a>
            </li>
            @endif


            @if(Auth::user()->tipo_usu == 3)
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('personas.index')}}">
                    <i class="fas fa-user-injured"></i>
                    <span>Pacientes</span></a>
            </li>
            @endif
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand  topbar mb-4 static-top shadow" style="background: #1e7d32;">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <div class="container">
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Citas ()</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar-day fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Pacientes (Anueales)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">5000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-procedures fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tasks Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Hospital
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hospital-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                solicitudes pendientes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                    @if(Auth::user()->tipo_usu == 3)
                    <!-- Basic Card Example -->

                    <!-- Collapsable Card Example -->
                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-primary">CREAR NUEVO PACIENTE</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardExample">
                            <div class="card-body">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <form action="{{ route('personas.store')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" required>
                                        </div>
                                        <div class="col">
                                            <label for="apellidoPaterno">Apellido Paterno</label>
                                            <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" value="{{old('apellidoPaterno')}}" required>
                                        </div>
                                        <div class="col">
                                            <label for="apellidoMaterno">Apellido Materno</label>
                                            <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" value="{{old('apellidoMaterno')}}" required>
                                        </div>
                                    </div>

                                    <div class="row">


                                        <div class="col">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{old('email')}}">
                                        </div>

                                        <div class="col">
                                            <label for="tel_1">Teléfono</label>
                                            <input type="text" class="form-control" id="tel_1" name="tel_1" value="{{old('tel_1')}}">
                                        </div>

                                        <div class="col">
                                            <label for="tel_2">Teléfono</label>
                                            <input type="text" class="form-control" id="tel_2" name="tel_2" value="{{old('tel_2')}}">
                                        </div>

                                        <div class="col">
                                            <label for="fecha_naci">Fecha Nacimiento</label>
                                            <input type="date" class="form-control" id="fecha_naci" name="fecha_naci" value="{{old('fecha_naci')}}" required>
                                        </div>

                                    </div>

                                    <br>

                                    <input type="submit" class="btn btn-primary mb-2" value="REGISTRAR">
                                </form>
                            </div>
                        </div>
                    </div>

                    @endif
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Medicasist 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        <div id="app">
            <app></app>
        </div>
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabe2">¿Seguro que quieres hacerlo?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf


                        <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();">Cerrar sesión</a>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('/admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('/admin/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('/admin/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('/admin/js/all.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('/admin/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('/admin/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/admin/js/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('/admin/js/datatables-demo.js')}}"></script>

    <script src="{{ mix('ja/app.js')}}"></script>
    <script>
        function contenido(sel) {
            if (sel.value == "1") {
                divC = document.getElementById("registroDoctor");
                divC.style.display = "";
            } else {

                divC = document.getElementById("registroDoctor");
                divC.style.display = "none";
            }
        }
    </script>
</body>

</html>