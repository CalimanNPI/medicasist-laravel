@extends('dashboard')

@section('content')
<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">CREAR CITA</h6>
    </div>
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
        <form action="{{ route('citas.store', ['persona' => $persona->paciente_id])}}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <ul class="list-group list-group-horizontal-sm">
                        <li class="list-group-item">Nombre del paciente: {{$persona->nombre}} {{$persona->apellidoPaterno}} {{$persona->apellidoMaterno}}</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="motivo">Motivo</label>
                    <input type="text" class="form-control" id="motivo" name="motivo" required value="{{old('motivo')}}">
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                    <label for="medico_id">Medicos</label>
                    <select id="medico_id" name="medico_id" class="form-control">
                        <option>Selecciona...</option>
                        @foreach($medicos as $medico)
                        <option value="{{$medico->medico_id}}">{{$medico->nombre}} {{$medico->apellidoPaterno}} {{$medico->apellidoMaterno}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="fecha_programada">Fecha Cita</label>
                    <input type="date" class="form-control" id="fecha_programada" name="fecha_programada" required value="{{old('fecha_programada')}}">
                </div>

                <div class="col">
                    <label for="hora_programada">Hora</label>
                    <input type="time" class="form-control" id="hora_programada" name="hora_programada" required value="{{old('hora_programada')}}">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="planta">Planta</label>
                    <input type="text" class="form-control" id="planta" name="planta" value="{{old('planta')}}">
                </div>
                <div class="col">
                    <label for="num_cama">Cama</label>
                    <input type="text" class="form-control" id="num_cama" name="num_cama" value="{{old('num_cama')}}">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="observaciones">Observaciones</label>
                    <textarea class="form-control" id="observaciones" rows="5" value="{{old('observaciones')}}"></textarea>
                </div>
            </div>
            <br>

            <input type="submit" class="btn btn-primary mb-2" value="AGENDAR">
        </form>
    </div>
</div>
@endsection