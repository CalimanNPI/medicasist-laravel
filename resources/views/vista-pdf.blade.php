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
            height: 10%;
            background-color: RoyalBlue;
         
        }

        div#columna_izquierda {
            float: left;
            width: 35%;
            height: 60%;
            padding: 0;
            background-color: SandyBrown;
        }

        div#columna_derecha {
            float: left;
            width: 65%;
            height: 60%;
            padding: 0;
            background-color: LightGreen;
        }

        div#pie {
            display: inline-block;
            padding-top: 0px;
            padding: 0;
            clear: both;
            width: 100%;
            height: 10%;
            background-color: Violet;
        }
    </style>
</head>

<body>

    <div id="cabecera">
        <h1>Styde.net</h1>
    </div>
    
    <div id="columna_izquierda">
        <ul>
            <li><a href="#ap1">Apartado 1</a></li>
            <li><a href="#ap2">Apartado 2</a></li>
            <li><a href="#ap3">Apartado 3</a></li>
        </ul>
    </div>

    <div id="columna_derecha">
        {{$medico[0]->nombre}}
        <img src="" alt="" >
    </div>

    <div id="pie">
        <h1>www.styde.net</h1>
    </div>

</body>

</html>