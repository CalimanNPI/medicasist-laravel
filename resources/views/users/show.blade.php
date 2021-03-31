@extends('dashboard')

@section('content')
<!-- Collapsable Card Example -->
<div class="card shadow mb-4">
  <!-- Card Header - Accordion -->
  <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
    <h6 class="m-0 font-weight-bold text-primary">INFORMACIÓN DEL USUARIO {{$user->nombre}}</h6>
  </a>
  <!-- Card Content - Collapse -->
  <div class="collapse show" id="collapseCardExample">
    <div class="card-body">
      <p>Nombre : <strong>{{$user->nombre}} {{$user->apellidoPaterno}} {{$user->apellidoMaterno}}</strong></p>
      <p>Teléfono: <strong>{{$user->tel_1}}</strong></p>
      <p>Cargo: <strong>{{$user->cargo_ocupado}}</strong></p>
      <p>Email: <strong>{{$user->email}}</strong></p>
      <a href="{{route('users.edit', ['user' => $user->id])}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> EDITAR</a>
    </div>
  </div>
</div>
@endsection