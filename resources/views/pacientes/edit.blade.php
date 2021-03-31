@extends('dashboard')

@section('content')
<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">EDITAR PACIENTE</h6>
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
        <form action="{{ route('personas.update', ['persona' => $persona->paciente_id])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required value="{{$persona->nombre}}">
                </div>
                <div class="col">
                    <label for="apellidoPaterno">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" required value="{{$persona->apellidoPaterno}}">
                </div>
                <div class="col">
                    <label for="apellidoMaterno">Apellido Materno</label>
                    <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" required value="{{$persona->apellidoMaterno}}">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{$persona->email}}">
                </div>
                <div class="col">
                    <label for="tel_1">Teléfono</label>
                    <input type="text" class="form-control" id="tel_1" name="tel_1" required value="{{$persona->tel_1}}">
                </div>
                <div class="col">
                    <label for="tel_2">Teléfono</label>
                    <input type="text" class="form-control" id="tel_2" name="tel_2" value="{{$persona->tel_2}}">
                </div>
                <div class="col">
                    <label for="fecha_naci">Fecha Nacimiento</label>
                    <input type="date" class="form-control" id="fecha_naci" name="fecha_naci" required value="{{$persona->fecha_naci}}">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="peso">Peso</label>
                    <input type="text" class="form-control" id="peso" name="peso" required value="{{$persona->peso}}">
                </div>
                <div class="col">
                    <label for="estatura">Estatura</label>
                    <input type="text" class="form-control" id="estatura" name="estatura" required value="{{$persona->estatura}}">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="temperatura">Temperatura</label>
                    <input type="text" class="form-control" id="temperatura" name="temperatura" required value="{{$persona->temperatura}}">
                </div>
                <div class="col">
                    <label for="presion">Presión</label>
                    <input type="text" class="form-control" id="presion" name="presion" required required value="{{$persona->presion}}">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="alergia">Alergia</label>
                    <input type="text" class="form-control" id="alergia" name="alergia" value="{{$persona->alergia}}">
                </div>
                <div class="col">
                    <label for="enfermedades">Enfermedad crónica o discapacidad</label>
                    <input type="text" class="form-control" id="enfermedades" name="enfermedades" value="{{$persona->enfermedades}}">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="ocupacion">Ocupación</label>
                    <input type="text" class="form-control" id="ocupacion" name="ocupacion" value="{{$persona->ocupacion}}">
                </div>
                <div class="col">
                    <label for="estado_civil">Estado civil</label>
                    <input type="text" class="form-control" id="estado_civil" name="estado_civil" value="{{$persona->estado_civil}}">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="nombre_responsable">Nombre responsable</label>
                    <input type="text" class="form-control" id="nombre_responsable" name="nombre_responsable" value="{{$persona->nombre_responsable}}">
                </div>
                <div class="col">
                    <label for="parentesco">Parentesco</label>
                    <input type="text" class="form-control" id="parentesco" name="parentesco" value="{{$persona->parentesco}}">
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label for="direccion">Direccion</label>
                    <textarea class="form-control" id="direccion" rows="5" value="{{$persona->direccion}}"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="observaciones">Observaciones</label>
                    <textarea class="form-control" id="observaciones" rows="5" value="{{$persona->observaciones}}"></textarea>
                </div>
            </div>
            <br>

            <input type="submit" class="btn btn-primary mb-2" value="ACTUALIZAR">
        </form>


    </div>
</div>
@endsection