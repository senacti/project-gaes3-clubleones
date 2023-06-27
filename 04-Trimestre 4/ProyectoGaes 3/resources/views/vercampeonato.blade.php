<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Club Leones campeonatos</title>
</head>
<body class="body">
<!-- html de la navbar -->
    <div class="header">
        <nav class="navbar">
            <div class="fondo container-fluid justify-content-between">
                <div class="fondo d-flex align-items-center">
                    {{-- <a class="navbar-brand" href="{{url('/dashboard')}}">LOGO</a> --}}
                    <a class="navbar-brand" href="{{url('/dashboard')}}"><img class="" height="45px" src="../imagenes/logoempresa.png" alt="">
                    </div>
                <div class="fondo d-flex align-items-center">
                    <a class="opciones btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        Menú
                    </a>
                </div>
            </div>
        </nav>
    </div>
  <!-- Html de la side bar -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Servicios</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body ">
        <div>
          Escoja alguno de los servicios de la empresa
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="btn-sidebaraccordion-item">
              <h2 class="accordion-header">
                <button class="fondo-claro  btn-sidebar accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Campeonatos
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <a href="{{url('vercampeonato')}}"><div class="accordion-body">Campeonatos</div></a>
                <a href="{{url('verprogramacion')}}"><div class="accordion-body">Programación</div></a>
                <a href="{{url('verequipo')}}"><div class="accordion-body">Equipos</div></a>
                <a href="{{url('verpartido')}}"><div class="accordion-body">Partidos</div></a>
                </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="fondo-claro accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Entrenamientos
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <a href="{{url('verentrenamiento')}}"><div class="accordion-body">Entrenamientos</div></a>

              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="fondo-claro accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Acondicionamiento fisico
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <a href="{{url('listaperfiles')}}"><div class="accordion-body">Perfiles</div></a>
                <a href="{{url('vertest')}}"><div class="accordion-body">Test</div></a>
                <a href="{{url('verplanacondicionamiento')}}"><div class="accordion-body">Plan de acondicionamiento</div></a>
              </div>
            </div>
          </div>
          <div class="logout text-center">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          
          <button type="button" class="btn btn-logout btn-outline-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</button>
          </div>
        </div>
    </div>      
{{-- html del contenido de la páginaa --}}
<div class="container-fluid">
  <h1 class="text-center">Campeonatos</h1>
  <a href="{{url('crearcampeonato')}}"><button type="button" class="opciones btn btn-logout btn-outline-primary">Crear campeonato</button></a>
  <a href="{{url('/vercampeonato/campeonatopdf')}}"><button type="button" class="opciones btn btn-logout btn-outline-primary">Ver reporte campeonatos</button></a>
  {{-- <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr class="fondo2">
          <th scope="col">Id campeonato</th>
          <th scope="col">Nombre</th>
          <th scope="col">Modo</th>
          <th scope="col">Categoria</th>
          <th scope="col">Direccion</th>
          <th scope="col">Cantidad de equipos</th>
          <th scope="col">Precio inscripcion</th>
          <th scope="col">Valor de premiacion</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($campeonato as $item)
        <tr>
          <td>{{$item->id_campeonato}}</td>
          <td>{{$item->nombre}}</td>
          <td>{{$item->modo}}</td>
          <td>{{$item->categoria}}</td>
          <td>{{$item->direccion}}</td>
          <td>{{$item->cantidad_equipos}}</td>
          <td>{{$item->precio_inscripcion}}</td>
          <td>{{$item->valor_premiacion}}</td>
          <td>{{$item->descripcion}}</td>
          <td><a href="{{ route('campeonato.edit', ['id_campeonato' => $item->id_campeonato]) }}"><button type="button" class="btn btn-logout btn-outline-primary">Editar</button></a></td>
          <td><form action="{{ route('campeonato.delete', ['id_campeonato' => $item->id_campeonato]) }}" method="post">
  @method("delete")
  @csrf
  <button type="submit" class="btn btn-logout btn-outline-primary">Eliminar</button>
</form></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div> --}}
<div class="table-responsive pt-3">
  <table class="table-campeonato table-striped">
      <thead>
          <tr class="fondo2">
              <th scope="col" class="fondo2">Id campeonato</th>
              <th scope="col" class="fondo2">Nombre</th>
              <th scope="col" class="fondo2">Modo</th>
              <th scope="col" class="fondo2">Categoria</th>
              <th scope="col" class="fondo2">Direccion</th>
              <th scope="col" class="fondo2">Cantidad de equipos</th>
              <th scope="col" class="fondo2">Precio inscripcion</th>
              <th scope="col" class="fondo2">Valor de premiacion</th>
              <th scope="col" class="fondo2">Descripcion</th>
              <th scope="col" class="fondo2">Editar</th>
              <th scope="col" class="fondo2">Eliminar</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($campeonato as $item)
          <tr>
              <td>{{$item->id_campeonato}}</td>
              <td>{{$item->nombre}}</td>
              <td>{{$item->modo}}</td>
              <td>{{$item->categoria}}</td>
              <td>{{$item->direccion}}</td>
              <td>{{$item->cantidad_equipos}}</td>
              <td>{{$item->precio_inscripcion}}</td>
              <td>{{$item->valor_premiacion}}</td>
              <td>{{$item->descripcion}}</td>
              <td>
                  <a href="{{ route('campeonato.edit', ['id_campeonato' => $item->id_campeonato]) }}">
                      <button type="button" class="opciones btn btn-logout btn-outline-primary">Editar</button>
                  </a>
              </td>
              <td>
                  <form action="{{ route('campeonato.delete', ['id_campeonato' => $item->id_campeonato]) }}" method="post">
                      @method("delete")
                      @csrf
                      <button type="submit" class="opciones btn btn-logout btn-outline-primary">Eliminar</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
</div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>