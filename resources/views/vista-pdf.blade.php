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
            Aqu?? va la direcci??n<br>
        </p>
    </div>

    <div id="columna_izquierda">
        <ul>
            <li><strong>Alergias:</strong> {{$persona->alergia}}</li>
            <li><strong>Enfermedad o Discapacidad:</strong> {{$persona->enfermedades}}</li>
            <li><strong>Peso:</strong> {{$persona->peso}}</li>
            <li><strong>Estatura:</strong> {{$persona->estatura}}</li>
            <li><strong>Temperatura:</strong> {{$persona->temperatura}}</li>
            <li><strong>Presi??n:</strong> {{$persona->presion}}</li>
        </ul>
    </div>

    <div id="columna_derecha">
        <p id="info_paciente">
            <hr>
            <strong>Nombre:</strong> {{$persona->nombre}} {{$persona->apellidoPaterno}} {{$persona->apellidoMaterno}}
            <strong>Edad:</strong> {{$edad}}
            <strong>Fecha de prescripci??n:</strong> ({{$receta[0]->fecha_expedido}})
            <hr>
        </p><br><br>


        <p id="info_medicamento">

        <ol>
            @foreach($medicamentos as $medicamento)
            <li><strong>Medicamento:</strong>{{$medicamento->medicamento}}
                <ul>
                    <li><strong>Indicaci??n:</strong>{{$medicamento->indicaciones}}</li>
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
        La receta m??dica oficial es v??lida para una dispensaci??n por la
        oficina de farmacia con un plazo m??ximo de diez d??as naturales a
        partir de la fecha de prescripci??n ({{$receta[0]->fecha_expedido}}).
        En cuanto a la duraci??n del tratamiento prescrito en la receta,
        es de un m??ximo de 1 a??o, salvo en casos especiales en los que el
        m??dico est?? obligado a limitar la duraci??n de la prescripci??n.
    </div>

</body>

</html>