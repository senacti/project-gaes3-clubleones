<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Club Leones</title>

    <style>
        /* body{
            background-color: #e3f2f7
        } */

        .fila1{
            background-color: #02225a;
            border-left: 1px solid #02225a;
            border-right: 1px solid #02225a;
            color: #fff;
        }

        .fila2{
            border-bottom: 1px solid #02225a;
            border-left: 1px solid #02225a;
            border-right: 1px solid #02225a;
            box-sizing: border-box;
        }

.empresa{
    display: inline;
    float: right;
}

    </style>

</head>
<body class="body">
    <p class="empresa">Club Leones</p>
    <p class="empresa">Logo</p>
    <h1>Reporte campeonatos</h1>
    <table class="table table-striped">
        <thead>
            <tr class="fila1">
                <th scope="col">id campeonato</th>
                <th scope="col">Nombre</th>
                <th scope="col">Modo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Direccion</th>
                <th scope="col">Cantidad de equipos</th>
                <th scope="col">Precio inscripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($campeonato as $item)

            <tr class="fila2">
                <td>{{$item->id_campeonato}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->modo}}</td>
                <td>{{$item->categoria}}</td>
                <td>{{$item->direccion}}</td>
                <td>{{$item->cantidad_equipos}}</td>
                <td>{{$item->precio_inscripcion}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <table class="table table-striped">
        <thead>
            <tr class="fila1">
                <th scope="col">id campeonato</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Valor de premiacion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($campeonato as $item)

            <tr class="fila2">
                <td>{{$item->id_campeonato}}</td>
                <td>{{$item->descripcion}}</td>
                <td>{{$item->valor_premiacion}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>      {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> --}}
</body>
</html>