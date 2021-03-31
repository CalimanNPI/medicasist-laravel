@extends('dashboard')

@section('content')
<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">EDITAR USUARIO {{$user->nombre}}</h6>
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
        <form action="{{ route('users.update', ['user' => $user->id])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required value="{{$user->nombre}}" readonly>
                </div>
                <div class="col">
                    <label for="apellidoPaterno">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" required value="{{$user->apellidoPaterno}}" readonly>
                </div>
                <div class="col">
                    <label for="apellidoMaterno">Apellido Materno</label>
                    <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" required value="{{$user->apellidoMaterno}}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="tel_1">Teléfono</label>
                    <input type="text" class="form-control" id="tel_1" name="tel_1" value="{{$user->tel_1}}">
                </div>
                <div class="col">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required value="{{$user->email}}">
                </div>
                <div class="col">
                    <label for="name">Nombre Usuario</label>
                    <input type="text" class="form-control" id="name" name="name" required value="{{$user->name}}">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="password">password</label>
                    <input id="password" class="form-control" type="password" name="password" />
                </div>

                <div class="col">
                    <label for="password1">password</label>
                    <input id="password1" class="form-control" type="password" name="password1" />
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="cargo_ocupado">Cargo</label>
                    <input id="cargo_ocupado" class="form-control" type="text" name="cargo_ocupado" required value="{{$user->cargo_ocupado}}" />
                </div>

              
            </div><br>

            <input type="submit" class="btn btn-primary mb-2" value="EDITAR">
        </form>

    </div>
</div>
@endsection