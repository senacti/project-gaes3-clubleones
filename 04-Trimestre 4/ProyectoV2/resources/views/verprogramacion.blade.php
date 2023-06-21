<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body class="body">
<!-- html de la navbar -->
    <div class="header">
        <nav class="navbar">
            <div class="fondo container-fluid justify-content-between">
                <div class="fondo d-flex align-items-center">
                    <a class="navbar-brand" href="{{url('/')}}">LOGO</a>
                    <a class="empresa nav-link" href="{{url('/')}}">Club Leones</a>
                </div>
                <div class="fondo d-flex align-items-center">
                    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
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
                <a href="../campeonatos/crearcampeonato.html"><div class="accordion-body">Crear campeonato</div></a>
                <div class="accordion-body">Crear programación</div>
                <div class="accordion-body">Agregar equipo</div>
                <div class="accordion-body">Crear partido</div>
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
          
          <button type="button" class="btn btn-logout btn-outline-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</button>
          </div>
        </div>
    </div>

        
{{-- html del contenido de la páginaa --}}

        
{{-- @foreach ($campeonato as $item)
    <div class="tabla-principal container mt-3">
      <div class="row-tabla row ">
        <div class="col-tabla col-md-6 text-center align-items-center">{{$item->nombre}}</div>
      </div>
  <div class="row row-tabla">
    <div class="col-tabla col-md-3 text-center align-items-center">{{$item->modo}}</div>
    <div class="col-tabla col-md-3 text-center align-items-center">{{$item->categoria}}</div>
  </div>
  <div class="row row-tabla">
    <div class="col-tabla col-md-3 text-center align-items-center">{{$item->direccion}}</div>
    <div class="col-tabla col-md-3 text-center align-items-center">{{$item->cantidad_equipos}}</div>
  </div>
<div class="row row-tabla">
<div class="col-tabla col-md-3 text-center align-items-center">{{$item->precio_inscripcion}}</div>
<div class="col-tabla col-md-3 text-center align-items-center">{{$item->valor_premiacion}}</div>
</div>
<div class="row-tabla row">
<div class="col-tabla col-md-6 text-center align-items-center">{{$item->descripcion}}</div>
</div>
<div class="row row-tabla">
  <div class="col-tabla col-2 text-center align-items-center"><a href="{{url('crearcampeonato')}}"><button type="button" class="btn btn-logout btn-outline-primary">Crear</button></a></div>

  <div class="col-tabla col-2 text-center align-items-center"><a href="{{ route('campeonato.edit', ['id_campeonato' => $item->id_campeonato]) }}"><button type="button" class="btn btn-logout btn-outline-primary">Editar</button></a></div>

  <div class="col-tabla col-2 text-center align-items-center"><a href="{{url('eliminarcampeonato')}}"><button type="button" class="btn btn-logout btn-outline-primary">Eliminar</button></a></div>
</div>
</div>
@endforeach --}}

<div class="container-fluid">
  <h1 class="text-center">Programación</h1>
  <a href="{{url('crearprogramacion')}}"><button type="button" class="btn btn-logout btn-outline-primary">Crear programacion</button></a>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Fecha</th>
          <th scope="col">Hora</th>
          <th scope="col">Categoría</th>
          <th scope="col">Equipo 1</th>
          <th scope="col">Equipo 2</th>
          <th scope="col">Precio de arbitraje</th>
          <th scope="col">Dirección</th>
          <th scope="col">id_campeonato</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($programacion as $item)


        <tr>
          <td>{{$item->fecha}}</td>
          <td>{{$item->hora}}</td>
          <td>{{$item->categoria}}</td>
          <td>{{$item->equipo1}}</td>
          <td>{{$item->equipo2}}</td>
          <td>{{$item->precio_arbitraje}}</td>
          <td>{{$item->direccion}}</td>
          <td>{{$item->id_campeonato}}</td>
          <td><a href="{{ route('programacion.edit', ['id_programacion' => $item->id_programacion]) }}"><button type="button" class="btn btn-logout btn-outline-primary">Editar</button></a></td>
          <td><form action="{{ route('programacion.delete', ['id_programacion' => $item->id_programacion]) }}" method="post">
  @method("delete")
  @csrf
  <button type="submit" class="btn btn-logout btn-outline-primary">Eliminar</button>
</form></td>
        </tr>
        @endforeach


      </tbody>
    </table>
  </div>
</div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>