@extends('dashboard')

@section('content')
<!-- Collapsable Card Example -->
<div class="card shadow mb-4">
  <!-- Card Header - Accordion -->
  <a href="#collapseCardExample1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
    <h6 class="m-0 font-weight-bold text-primary">DELALLE DE LA CITA DEL PACIENTE {{$persona->nombre}}</h6>
  </a>
  <!-- Card Content - Collapse -->
  <div class="collapse show" id="collapseCardExample1">
    <div class="card-body">


      <p class="card-text">Nombre del Paciente: {{$persona->nombre}} {{$persona->apellidoMaterno}} {{$persona->apellidoMaterno}}</p>
      <p class="card-text">Nombre del Medico: {{$medico[0]->nombre}} {{$medico[0]->apellidoMaterno}} {{$medico[0]->apellidoMaterno}}</p>
      <P class="card-text">Fecha y Hora: {{$cita->fecha_programada}} {{$cita->hora_programada}}</P>
      <p class="card-text">Palnta: {{$cita->planta}} Sala:{{$cita->num_cama}}</p>
      <p class="card-text">Observaciones: {{$cita->observaciones}}</p>
    </div>
  </div>
</div>


<!-- Collapsable Card Example -->
<div class="card shadow mb-4">
  <!-- Card Header - Accordion -->
  <a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
    <h6 class="m-0 font-weight-bold text-primary">RECETA PARA EL PACIENTE {{$persona->nombre}}</h6>
  </a>
  <!-- Card Content - Collapse -->
  <div class="collapse show" id="collapseCardExample2">
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
      <form action="{{ route('consulta.update', ['cita' => $cita->cita_id])}}" method="POST">
        @csrf
        <div class="row">
          <div class="col">
            <label for="diagnostico">Diagnostico</label>
            <textarea class="form-control" id="diagnostico" name="diagnostico" rows="5" value="{{old('diagnostico')}}"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <label for="observaciones">observaciones</label>
            <textarea class="form-control" id="observaciones" name="observaciones" rows="5" value="{{old('diagnostico')}}"></textarea>
          </div>
        </div>


        <hr>
        <h3>Medicamentos</h3>
        <hr>


        <div class="row">
          <div class="col">
            <label for="medicamento">Medicamento</label>
            <input type="text" class="form-control" id="medicamento" name="medicamento" value="{{old('medicamento')}}">
          </div>
          <div class="col">
            <label for="indicaciones">Indicaciones</label>
            <textarea class="form-control" id="indicaciones" name="indicaciones" rows="5" value="{{old('indicaciones')}}"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col">

            <a class="btn btn-success mb-2" id="btn" name="btn">AGREGAR MEDICAMENTO</a>
          </div>
        </div>

        <div id="app">

        </div>
        <hr>
        <br>

        <input type="submit" class="btn btn-primary mb-2" value="CREAR RECETA">
      </form>

    </div>
  </div>
</div>
@endsection