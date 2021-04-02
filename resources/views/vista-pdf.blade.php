<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receta</title>
    <!-- Custom styles for this template-->
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        div#cabecera {
            margin-top: 0px;
            width: 100%;
            height: 15%;
            background-color: #1e7d32;
            color: #fff;

        }

        div#columna_izquierda_cabecera {
            float: left;
            width: 15%;
            height: 15%;
            border: 1px solid #000;
            color: #fff;
        }

        div#columna_izquierda {
            float: left;
            width: 30%;
            height: 60%;
            padding: 0;
            border: 1px solid #000;
        }

        div#columna_derecha {
            float: left;
            width: 65%;
            height: 60%;
            padding: 0;
            border: 1px solid #000;
        }

        div#pie {
            text-align: justify;
            display: inline-block;
            padding-top: 0px;
            padding: 0;
            clear: both;
            width: 100%;
            height: 8%;
            background-color: #1e7d32;
            border: 1px solid #000;
            color: #fff;
            size: 8px;
        }

        h1,
        h2,
        h3,
        h4 {
            text-align: center;
            padding: 0;
            margin: 0;
            text-transform: capitalize;
        }

        p#info_cabecera {
            text-align: center;
            padding: 0;
        }

        p {
            font: bold 12px/1.5 arial, helvetica, sans-serif;
        }

        img {
            width: 90px;
            height: 80px;
        }

        hr {
            height: 5px;
            background-color: black;
        }

        #info_paciente {
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="columna_izquierda_cabecera">
        <img src="{{$logo}}" alt="logo">
    </div>

    <div id="cabecera">
        <h3>Dr(a) {{$medico[0]->nombre}} {{$medico[0]->apellidoPaterno}} {{$medico[0]->apellidoMaterno}}</h3>
        <p id="info_cabecera">
            {{$medico[0]->especialidad}}<br>
            {{$medico[0]->cedula_No}}<br>
            Aquí va la dirección<br>
        </p>
    </div>

    <div id="columna_izquierda">
        <ul>
            <li><strong>Alergias:</strong> {{$persona->alergia}}</li>
            <li><strong>Enfermedad o Discapacidad:</strong> {{$persona->enfermedades}}</li>
            <li><strong>Peso:</strong> {{$persona->peso}}</li>
            <li><strong>Estatura:</strong> {{$persona->estatura}}</li>
            <li><strong>Temperatura:</strong> {{$persona->temperatura}}</li>
            <li><strong>Presión:</strong> {{$persona->presion}}</li>
        </ul>
    </div>

    <div id="columna_derecha">
        <p id="info_paciente">
            <hr>
            <strong>Nombre:</strong> {{$persona->nombre}} {{$persona->apellidoPaterno}} {{$persona->apellidoMaterno}}
            <strong>Edad:</strong> {{$edad}}
            <strong>Fecha de prescripción:</strong> ({{$receta[0]->fecha_expedido}})
            <hr>
        </p><br><br>


        <p id="info_medicamento">

        <ol>
            @foreach($medicamentos as $medicamento)
            <li><strong>Medicamento:</strong>{{$medicamento->medicamento}}
                <ul>
                    <li><strong>Indicación:</strong>{{$medicamento->indicaciones}}</li>
                </ul>
            </li>
            @endforeach
            <hr>
        
        </ol>


        <hr>
        </p>

        <p><img src="{{$firma}}"></p>

    </div>

    <div id="pie">
        La receta médica oficial es válida para una dispensación por la
        oficina de farmacia con un plazo máximo de diez días naturales a
        partir de la fecha de prescripción ({{$receta[0]->fecha_expedido}}).
        En cuanto a la duración del tratamiento prescrito en la receta,
        es de un máximo de 1 año, salvo en casos especiales en los que el
        médico está obligado a limitar la duración de la prescripción.
    </div>

</body>

</html>