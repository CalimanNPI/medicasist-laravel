@extends('dashboard')

@section('content')
<!-- Collapsable Card Example -->
<div class="card shadow mb-4">
  <!-- Card Header - Accordion -->
  <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
    <h6 class="m-0 font-weight-bold text-primary">DELALLE DE LA CITA DEL PACIENTE {{$persona->nombre}}</h6>
  </a>
  <!-- Card Content - Collapse -->
  <div class="collapse show" id="collapseCardExample">
    <div class="card-body">
    
      
      <p class="card-text">Nombre del Paciente: {{$persona->nombre}} {{$persona->apellidoMaterno}} {{$persona->apellidoMaterno}}</p>
      <p class="card-text">Nombre del Medico: {{$medico[0]->nombre}} {{$medico[0]->apellidoMaterno}} {{$medico[0]->apellidoMaterno}}</p>
      <P class="card-text">Fecha y Hora: {{$cita->fecha_programada}} {{$cita->hora_programada}}</P>
      <p class="card-text">Palnta: {{$cita->planta}} Sala:{{$cita->num_cama}}</p>
      <p class="card-text">Observaciones: {{$cita->observaciones}}</p>
    </div>
  </div>
</div>
@endsection