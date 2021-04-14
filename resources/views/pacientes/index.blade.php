@extends('dashboard')

@section('content')
<!-- Dropdown Card Example -->
<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">PACIENTES</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Acciones Paciente:</div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('personas.create')}}"><i class="fas fa-user-injured"></i> Nuevo Paciente</a>
            </div>
        </div>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        @if (session('succses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('succses')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <caption>Lista de pacientes</caption>
                <thead>
                    <tr class="table-primary">
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Email</th>
                        <th scope="col">Accciones</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($personas as $persona)
                    <tr>
                        <td>{{$persona->nombre}}</td>
                        <td>{{$persona->apellidoPaterno}}</td>
                        <td>{{$persona->apellidoMaterno}}</td>
                        <td>{{$persona->email}}</td>
                        <td>
                            @if(Auth::user()->tipo_usu == 3 || Auth::user()->tipo_usu == 1)
                            <a href="{{route('personas.show',['persona' => $persona->paciente_id])}}" class="btn btn-outline-success btn-sm"><i class="fas fa-info"></i></a>
                            <a href="{{route('citas.create',['persona' => $persona->paciente_id])}}" class="btn btn-outline-info btn-sm"><i class="far fa-calendar-plus"></i></a>
                            @endif
        
                            @if(Auth::user()->tipo_usu == 1)
                            <a href="{{route('personas.edit',['persona' => $persona->paciente_id])}}" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i></a>
                            @endif

                            @if(Auth::user()->tipo_usu == 2 || Auth::user()->tipo_usu == 1)
                            <a href="{{route('consulta.create',['persona' => $persona->paciente_id])}}" class="btn btn-outline-info btn-sm"><i class="fas fa-user-cog"></i></a>
                            @endif
                        </td>
                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection