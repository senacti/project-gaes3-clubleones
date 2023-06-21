<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}">  --}}
    <title>Document</title>
</head>
<body class="body">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo</th>
                <th scope="col">Puntaje mínimo</th>
                <th scope="col">Puntaje máximo</th>
                <th scope="col">Puntaje mínimo bajo</th>
                <th scope="col">Puntaje máximo bajo</th>
                <th scope="col">Puntaje mínimo medio</th>
                <th scope="col">Puntaje máximo medio</th>
                <th scope="col">Puntaje mínimo alto</th>
                <th scope="col">Puntaje máximo alto</th>
                <th scope="col">descripción</th>
                <th scope="col">id_perfil</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($test as $item)

            <tr>
                <td>{{$item->nombre}}</td>
                <td>{{$item->tipo}}</td>
                <td>{{$item->puntaje_minimo}}</td>
                <td>{{$item->puntaje_maximo}}</td>
                <td>{{$item->puntaje_minimo_bajo}}</td>
                <td>{{$item->puntaje_maximo_bajo}}</td>
                <td>{{$item->puntaje_minimo_medio}}</td>
                <td>{{$item->puntaje_maximo_medio}}</td>
                <td>{{$item->puntaje_minimo_alto}}</td>
                <td>{{$item->puntaje_maximo_alto}}</td>
                <td>{{$item->descripcion}}</td>
                <td>{{$item->id_perfil}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>      {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> --}}
</body>
</html>