<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('/admin/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{asset('/admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('/admin/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Collapsable Card Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">RECETA MÉDICA</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample1">
            <div class="card-body">

                <!-- Content Row -->
                <div class="row">
                    <!-- Border Left Utilities -->
                    <div class="col-lg-6">
                        <div class="card mb-4 py-3 border-left-success">
                            <div class="card-body">
                                NOMBRE DEL PACIENTE: {{$persona->nombre}} {{$persona->apellidoMaterno}} {{$persona->apellidoMaterno}}
                            </div>
                        </div>
                        <div class="card mb-4 py-3 border-left-success">
                            <div class="card-body">
                                PESO: {{$persona->peso}}
                            </div>
                        </div>
                        <div class="card mb-4 py-3 border-left-success">
                            <div class="card-body">
                                ESTATURA: {{$persona->estatura}}
                            </div>
                        </div>
                        <div class="card mb-4 py-3 border-left-success">
                            <div class="card-body">
                                TEMPARATURA: {{$persona->temperatura}}
                            </div>
                        </div>
                        <div class="card mb-4 py-3 border-left-success">
                            <div class="card-body">
                                PRESIÓN: {{$persona->presion}}
                            </div>
                        </div>

                    </div>
                </div>


                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                        <h6 class="m-0 font-weight-bold text-primary">RECETA PARA EL PACIENTE</h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse show" id="collapseCardExample2">
                        <div class="card-body">
                            {{$persona}}

                            {{$medico}}
                            {{$cita}}
                            {{$receta}}
                            {{$medicamentos}}


                        </div>
                    </div>
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
</body>

</html>