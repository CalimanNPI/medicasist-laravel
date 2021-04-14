@extends('dashboard')

@section('content')
<!-- Collapsable Card Example -->
<div class="card shadow mb-4">
  <!-- Card Header - Accordion -->
  <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
    <h6 class="m-0 font-weight-bold text-primary">INFORMACIÓN DEL PACIENTE {{$persona->nombre}}</h6>
  </a>
  <!-- Card Content - Collapse -->
  <div class="collapse show" id="collapseCardExample">
    <div class="card-body">
      <p>Nombre : <strong>{{$persona->nombre}} {{$persona->apellidoPaterno}} {{$persona->apellidoMaterno}}</strong></p>
      <p>Teléfonos: <strong>{{$persona->tel_1}},</strong> <strong>{{$persona->tel_2}}</strong></p>
      <p>Email: <strong>{{$persona->email}}</strong></p>
      <p>Elergias: <strong>{{$persona->alergia}}</strong></p>
      <p>Enfermedades: <strong>{{$persona->enfermedades}}</strong></p>
      <p>Peso: <strong>{{$persona->peso}}</strong></p>
      <p>Estatura: <strong>{{$persona->estatura}}</strong></p>
      <p>Temperatura: <strong>{{$persona->temperatura}}</strong></p>

      @if(Auth::user()->tipo_usu == 1)
      <a href="{{route('personas.edit', ['persona' => $persona->paciente_id])}}" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i> EDITAR</a>
      @endif
      
    </div>
  </div>
</div>
@endsection