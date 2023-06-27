<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Club Leones partidos</title>

    <style>
        body {
            /* background-color: #e3f2f7; */
            font-family: Arial, sans-serif;
        }
    
        h1 {
            text-align: center;
            margin-top: 50px;
        }
    
        .empresa {
            float: right;
            font-size: 40px;
            color: #02225a;
            display: block;
        }
    
        .table {
            border: 1px solid #02225a;
            width: 100%;
            margin-bottom: 20px;
        }
    
        .table th,
        .table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #02225a;
        }
    
        .table th {
            background-color: #02225a;
            color: #fff;
        }
    
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f1f1f1;
        }
    
        /* Estilo para las tablas de test */
        .table-test {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }
    
        .table-test th,
        .table-test td {
            padding: 10px;
            border: 1px solid #02225a;
            text-align: left;
        }
    
        .table-test .fila1 {
            background-color: #02225a;
            color: #fff;
        }
    
        .table-test .fila2 {
            background-color: #f1f1f1;
        }
    
        /* Estilo para la tabla de "planacondicionamiento" */
        .table-planacondicionamiento {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }
    
        .table-planacondicionamiento th,
        .table-planacondicionamiento td {
            padding: 10px;
            border: 1px solid #02225a;
            text-align: left;
        }
    
        .table-planacondicionamiento .fila1 {
            background-color: #02225a;
            color: #fff;
        }
    
        .table-planacondicionamiento .fila2 {
            background-color: #f1f1f1;
        }
    </style>

</head>
<body class="body">
    <p class="empresa">Club Leones</p>
    <h1>Reporte partidos</h1>
    <table class="table table-striped">
        <thead>
            <tr class="fila1">
                <th scope="col">id partido</th>
                <th scope="col">Equipo 1</th>
                <th scope="col">Goles equipo 1</th>
                <th scope="col">Jugador que marca gol equipo 1</th>
                <th scope="col">Faltas cometidas equipo 1</th>
                <th scope="col">Tarjetas amarillas equipo 1</th>
                <th scope="col">Tarjetas rojas equipo 1</th>
                <th scope="col">Pago arbitraje equipo 1</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($partido as $item)

            <tr class="fila2">
                <td>{{$item->id_campeonato}}</td>
                <td>{{$item->equipo1}}</td>
                <td>{{$item->goles_equipo1}}</td>
                <td>{{$item->jugador_marco_gol_equipo1}}</td>
                <td>{{$item->faltas_cometidas_equipo1}}</td>
                <td>{{$item->tarjetas_amarillas_equipo1}}</td>
                <td>{{$item->tarjetas_rojas_equipo1}}</td>
                <td>{{$item->pago_arbitraje_equipo1}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <table class="table table-striped">
        <thead>
            <tr class="fila1">
                <th scope="col">id partido</th>
                <th scope="col">Equipo 2</th>
                <th scope="col">Goles equipo 2</th>
                <th scope="col">Jugador que marca gol equipo 2</th>
                <th scope="col">Faltas cometidas equipo 2</th>
                <th scope="col">Tarjetas amarillas equipo 2</th>
                <th scope="col">Tarjetas rojas equipo 2</th>
                <th scope="col">Pago arbitraje equipo 2</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($partido as $item)

            <tr class="fila2">
                <td>{{$item->id_campeonato}}</td>
                <td>{{$item->equipo1}}</td>
                <td>{{$item->goles_equipo1}}</td>
                <td>{{$item->jugador_marco_gol_equipo1}}</td>
                <td>{{$item->faltas_cometidas_equipo1}}</td>
                <td>{{$item->tarjetas_amarillas_equipo1}}</td>
                <td>{{$item->tarjetas_rojas_equipo1}}</td>
                <td>{{$item->pago_arbitraje_equipo1}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <table class="table table-striped">
        <thead>
            <tr class="fila1">
                <th scope="col">id partido</th>
                <th scope="col">Resultado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($partido as $item)

            <tr class="fila2">
                <td>{{$item->id_campeonato}}</td>
                <td>{{$item->resultado}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> --}}
</body>
</html>