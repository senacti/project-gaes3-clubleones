<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Club Leones perfil</title>

    {{-- <style>
        /* body{
            background-color: #e3f2f7
        } */

        .columna1{
            background-color: #02225a;
            border-left: 1px solid #02225a;
            border-right: 1px solid #02225a;
            color: #fff;
        }

        .columna2{
            border-bottom: 1px solid #02225a;
            border-left: 1px solid #02225a;
            border-right: 1px solid #02225a;
            box-sizing: border-box;
        }

.empresa{
    display: inline;
    float: right;
}

.table{
    border: 1px solid #02225a;

}

    </style> --}}

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

            /* margin-top: 10px;
            margin-right: 20px; */
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
            width: 50%; /* Ancho igual para ambas columnas */
        }
    
        .table th {
            background-color: #02225a;
            color: #fff;
        }
    
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f1f1f1;
        }
    </style>
     
</head>
<body class="body">
    <p class="empresa">Club Leones</p>
    <h1 class="">Reporte perfil de jugadores</h1>
    @foreach ($perfil as $item)

    <table class="table table-striped">
        <tbody>
          <tr>
            <th class="columna1" scope="row">Nombre</th>
            <td>{{$item->nombre}}</td>
          </tr>
          <tr>
            <th class="columna1" scope="row">Correo</th>
            <td>{{$item->email}}</td>
          </tr>
          <tr>
            <th class="columna1" scope="row">Usuario</th>
            <td>{{$item->usuario}}</td>
          </tr>
          <tr>
            <th class="columna1" scope="row">Edad</th>
            <td>{{$item->edad}}</td>
          </tr>
          <tr>
            <th class="columna1" scope="row">Nivel de flexibilidad</th>
            <td>{{$item->nivel_flexibilidad}}</td>
          </tr>
          <tr>
            <th class="columna1" scope="row">Nivel de resistencia</th>
            <td>{{$item->nivel_resistencia}}</td>
          </tr>
          <tr>
            <th class="columna1" scope="row">Nivel de fuerza</th>
            <td>{{$item->nivel_fuerza}}</td>
          </tr>
          <tr>
            <th class="columna1" scope="row">ID</th>
            <td>{{$item->id}}</td>
          </tr>
        </tbody>
      </table>
      @endforeach

    {{-- <table class="table table-striped">
        <thead>
            <tr class="fila1">
                <th scope="col">idperfil</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Usuario</th>
                <th scope="col">Edad</th>
                <th scope="col">Nivel de flexibilidad</th>
                <th scope="col">Nivel de resistencia</th>
                <th scope="col">Nivel de fuerza</th>
                <th scope="col">id</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perfil as $item)
            <tr class="fila2">
                <td>{{$item->id_perfil}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->usuario}}</td>
                <td>{{$item->edad}}</td>
                <td>{{$item->nivel_flexibilidad}}</td>
                <td>{{$item->nivel_resistencia}}</td>
                <td>{{$item->nivel_fuerza}}</td>
                <td>{{$item->id}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> --}}
</body>
</html>