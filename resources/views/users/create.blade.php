@extends('dashboard')

@section('content')
<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">REGISTRAR NUEVO USUARIO</h6>
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
        <form action="{{ route('users.store')}}" method="POST" enctype="multipart/form-data">
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
                    <label for="name">Nombre Usuario</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
                </div>
                <div class="col">
                    <label for="tel_1">Teléfono</label>
                    <input type="text" class="form-control" id="tel_1" name="tel_1" value="{{old('tel_1')}}">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{old('email')}}">
                </div>
                <div class="col">
                    <label for="password">password</label>
                    <input id="password" class="form-control" type="password" name="password" required />
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="cargo_ocupado">Cargo</label>
                    <input id="cargo_ocupado" class="form-control" type="text" name="cargo_ocupado" value="{{old('cargo_ocupado')}}" required />
                </div>
                <div class="col">
                    <label for="tipo_usu">Tipo Usuario</label>
                    <select class="form-control" id="tipo_usu" name="tipo_usu" value="{{old('tipo_usu')}}" required onChange="contenido(this)">
                        <option>Selecciona</option>
                        <option value="1">Medico</option>
                        <option value="2">Enfermera</option>
                        <option value="3">recepcionista</option>
                    </select>
                </div>
            </div>

            <div id="registroDoctor" style="display:none;">
                <div class="row">
                    <div class="col">
                        <label for="cedula_No">Cedula</label>
                        <input id="cedula_No" class="form-control" type="text" name="cedula_No" value="{{old('cedula_No')}}" />
                    </div>
                    <div class="col">
                        <label for="especialidad">Especialidad</label>
                        <input id="especialidad" class="form-control" type="text" name="especialidad" value="{{old('especialidad')}}" />
                    </div>
                    <div class="col">
                        <label for="lugar_especializacion">Lugar de especialización</label>
                        <input id="lugar_especializacion" class="form-control" type="text" name="lugar_especializacion" value="{{old('lugar_especializacion')}}" />
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="cedula_path">Cdula</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="cedula_path" name="cedula_path" accept="image/jpeg,image/png" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="cedula_path">Elija el archivo</label>
                        </div>
                    </div>
                    <div class="col">
                        <label for="descripcion">Firma electrónica</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="descripcion" name="descripcion" accept="image/jpeg,image/png" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="descripcion">Elija el archivo</label>
                        </div>
                    </div>
                </div>
            </div>



            <br>

            <input type="submit" class="btn btn-primary mb-2" value="REGISTRAR">
        </form>

    </div>
</div>

@endsection