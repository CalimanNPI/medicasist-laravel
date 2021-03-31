@extends('dashboard')

@section('content')
<!-- Dropdown Card Example -->
<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">CITAS PROGRAMADAS</h6>
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
                <caption>Lista de citas</caption>
                <thead>
                    <tr class="table-primary">
                        <th scope="col">Motivo</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Planta</th>
                        <th scope="col">Cama</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($citas as $cita)
                    <tr>
                        <td>{{$cita->motivo}}</td>
                        <td>{{$cita->fecha_programada}}</td>
                        <td>{{$cita->hora_programada}}</td>
                        <td>{{$cita->planta}}</td>
                        <td>{{$cita->num_cama}}</td>
                        <td>
                            <a href="{{route('citas.show',['cita' => $cita->cita_id])}}" class="btn btn-outline-success btn-sm"><i class="fas fa-info"></i></a>

                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection