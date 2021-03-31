@extends('dashboard')

@section('content')
<!-- Basic Card Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">CREAR NUEVO PACIENTE</h6>
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
@endsection