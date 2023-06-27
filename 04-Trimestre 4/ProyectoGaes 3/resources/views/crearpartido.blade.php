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
                    </a>                </div>
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

        <div class="container">
            <h1 class="text-center">Crear Partido</h1>
            <form action="{{route("partido.create")}}" method="POST">
              @csrf
              <div class="row">
              <div class="col-md-12 fondo2">
              <div class="mb-3 fondo2">
                <label for="equipo1" class="form-label fondo2">Equipo 1</label>
                <input type="text" class="form-control" id="equipo1" name="equipo1" required>
              </div>
              <div class="mb-3 fondo2">
                <label for="equipo2" class="form-label fondo2">Equipo 2</label>
                <input type="text" class="form-control" id="equipo2" name="equipo2" required>
              </div>
              <div class="mb-3 fondo2">
                <label for="goles_equipo1" class="form-label fondo2">Goles equipo 1</label>
                <input type="number" class="form-control" id="goles_equipo1" name="goles_equipo1" required>
              </div>
              <div class="mb-3 fondo2">
                <label for="jugador_marco_gol_equipo1" class="form-label fondo2">jugador que hace gol en el equipo 1</label>
                <input type="text" class="form-control" id="jugador_marco_gol_equipo1" name="jugador_marco_gol_equipo1" required>
              </div>
              <div class="mb-3 fondo2">
                <label for="goles_equipo2" class="form-label fondo2">Goles equipo 1</label>
                <input type="number" class="form-control" id="goles_equipo2" name="goles_equipo2" required>
              </div>   
              <div class="mb-3 fondo2">
                <label for="jugador_marco_gol_equipo2" class="form-label fondo2">jugador que hace gol en el equipo 2</label>
                <input type="text" class="form-control" id="jugador_marco_gol_equipo2" name="jugador_marco_gol_equipo2" required>
              </div>
              <div class="mb-3 fondo2">
                <label for="resultado" class="form-label fondo2">Resultado</label>
                <input type="text" class="form-control" id="resultado" name="resultado" required>
              </div>
              <div class="mb-3 fondo2">
                <label for="faltas_cometidas_equipo1" class="form-label fondo2">Faltas cometidas por el equipo 1</label>
                <input type="number" class="form-control" id="faltas_cometidas_equipo1" name="faltas_cometidas_equipo1" required>
              </div>
              <div class="mb-3 fondo2">
                <label for="faltas_cometidas_equipo2" class="form-label fondo2">Faltas cometidas por el equipo 2</label>
                <input type="number" class="form-control" id="faltas_cometidas_equipo2" name="faltas_cometidas_equipo2" required>
              </div>
              <div class="mb-3">
                <label for="tarjetas_amarillas_equipo1" class="form-label">Tarjetas amarillas del equipo 1</label>
                <input type="number" class="form-control" id="tarjetas_amarillas_equipo1" name="tarjetas_amarillas_equipo1" required>
              </div>
              <div class="mb-3 fondo2">
                <label for="tarjetas_amarillas_equipo2" class="form-label fondo2">Tarjetas amarillas del equipo 2</label>
                <input type="number" class="form-control" id="tarjetas_amarillas_equipo2" name="tarjetas_amarillas_equipo2" required>
              </div>
              <div class="mb-3">
                <label for="tarjetas_rojas_equipo1" class="form-label">Tarjetas rojas del equipo 1</label>
                <input type="number" class="form-control" id="tarjetas_rojas_equipo1" name="tarjetas_rojas_equipo1" required>
              </div>
              <div class="mb-3 fondo2">
                <label for="tarjetas_rojas_equipo2" class="form-label fondo2">Tarjetas rojas del equipo 2</label>
                <input type="number" class="form-control" id="tarjetas_rojas_equipo2" name="tarjetas_rojas_equipo2" required>
              </div>
              <div class="mb-3 fondo2">
                <label for="pago_arbitraje_equipo1" class="form-label fondo2">Pago de arbitraje equipo 1</label>
                <input type="text" class="form-control" id="pago_arbitraje_equipo1" name="pago_arbitraje_equipo1" required>
              </div>
              <div class="mb-3 fondo2">
                <label for="pago_arbitraje_equipo2" class="form-label fondo2">Pago de arbitraje equipo 2</label>
                <input type="text" class="form-control" id="pago_arbitraje_equipo2" name="pago_arbitraje_equipo2" required>
              </div>
              <div class="mb-3 fondo2">
                <label for="id_campeonato" class="form-label fondo2">id_campeonato</label>
                <input type="number" class="form-control" id="id_campeonato" name="id_campeonato" required>
              </div>
              <div class="text-center fondo2">
                <button type="submit" class="btn btn-primary">Crear</button>
              </div>
            </form>
          </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>