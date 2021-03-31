@extends('dashboard')

@section('content')
<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">CONSULTA PACIENTE</h6>
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
        <form action="{{ route('consulta.store', ['persona' => $persona->paciente_id])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <label for="peso">Peso</label>
                    <input type="text" class="form-control" id="peso" name="peso" required value="{{old('peso')}}">
                </div>
                <div class="col">
                    <label for="estatura">Estatura</label>
                    <input type="text" class="form-control" id="estatura" name="estatura" required value="{{old('estatura')}}">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="temperatura">Temperatura</label>
                    <input type="text" class="form-control" id="temperatura" name="temperatura" required value="{{old('temperatura')}}">
                </div>
                <div class="col">
                    <label for="presion">Presión</label>
                    <input type="text" class="form-control" id="presion" name="presion" required required value="{{old('presion')}}">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="alergia">Alergia</label>
                    <input type="text" class="form-control" id="alergia" name="alergia" value="{{old('alergia')}}">
                </div>
                <div class="col">
                    <label for="enfermedades">Enfermedad crónica o discapacidad</label>
                    <input type="text" class="form-control" id="enfermedades" name="enfermedades" value="{{old('enfermedades')}}">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="observaciones">Observaciones</label>
                    <textarea class="form-control" id="observaciones" rows="5" value="{{old('observaciones')}}"></textarea>
                </div>
            </div>
            <br>

            <input type="submit" class="btn btn-primary mb-2" value="REGISTRAR">
        </form>
    </div>
</div>
@endsection