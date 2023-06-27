<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Club Leones test</title>
</head>
<body class="body">
<!-- html de la navbar -->
    <div class="header">
        <nav class="navbar">
            <div class="fondo container-fluid justify-content-between">
                <div class="fondo d-flex align-items-center">
                    {{-- <a class="navbar-brand" href="{{url('/dashboard')}}">LOGO</a> --}}
                    <a class="navbar-brand" href="{{url('/dashboard')}}"><img class="" height="45px" src="../../imagenes/logoempresa.png" alt="">
                    </a>
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

<div class="container">
  <h1 class="text-center">Actualizar Test</h1>
  <form action="{{ route('test.update', ['id_test' => $test->id_test]) }}" method="post">
    @method('PUT')
    @csrf
    <div class="row">
      <div class="col-md-4 fondo2">
        <div class="mb-3 fondo2">
          <label for="nombre" class="form-label fondo2">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $test->nombre }}" required>
        </div>
        <div class="mb-3 fondo2">
          <label for="tipo" class="form-label fondo2">Tipo</label>
          <input type="text" class="form-control" id="tipo" name="tipo" value="{{ $test->tipo }}" required>
        </div>
        <div class="mb-3 fondo2">
          <label for="puntaje_minimo" class="form-label fondo2">Puntaje mínimo</label>
          <input type="number" class="form-control" id="puntaje_minimo" name="puntaje_minimo" value="{{ $test->puntaje_minimo }}" required>
        </div>
      </div>
      <div class="col-md-4 fondo2">
        <div class="mb-3 fondo2">
          <label for="puntaje_maximo" class="form-label fondo2">Puntaje máximo</label>
          <input type="number" class="form-control" id="puntaje_maximo" name="puntaje_maximo" value="{{ $test->puntaje_maximo }}" required>
        </div>
        <div class="mb-3 fondo2">
          <label for="puntaje_minimo_bajo" class="form-label fondo2">Puntaje mínimo bajo</label>
          <input type="number" class="form-control" id="puntaje_minimo_bajo" name="puntaje_minimo_bajo" value="{{ $test->puntaje_minimo_bajo }}" required>
        </div>
        <div class="mb-3 fondo2">
          <label for="puntaje_maximo_bajo" class="form-label fondo2">Puntaje máximo bajo</label>
          <input type="number" class="form-control" id="puntaje_maximo_bajo" name="puntaje_maximo_bajo" value="{{ $test->puntaje_maximo_bajo }}" required>
        </div>
      </div>
      <div class="col-md-4 fondo2">
        <div class="mb-3 fondo2">
          <label for="puntaje_minimo_medio" class="form-label fondo2">Puntaje mínimo medio</label>
          <input type="number" class="form-control" id="puntaje_minimo_medio" name="puntaje_minimo_medio" value="{{ $test->puntaje_minimo_medio }}" required>
        </div>
        <div class="mb-3 fondo2">
          <label for="puntaje_maximo_medio" class="form-label fondo2">Puntaje máximo medio</label>
          <input type="number" class="form-control" id="puntaje_maximo_medio" name="puntaje_maximo_medio" value="{{ $test->puntaje_maximo_medio }}" required>
        </div>
        <div class="mb-3 fondo2">
          <label for="puntaje_minimo_alto" class="form-label fondo2">Puntaje mínimo alto</label>
          <input type="number" class="form-control" id="puntaje_minimo_alto" name="puntaje_minimo_alto" value="{{ $test->puntaje_minimo_alto }}" required>
        </div>
      </div>
      <div class="col-md-12 fondo2">
        <div class="mb-3 fondo2">
          <label for="puntaje_maximo_alto" class="form-label fondo2">Puntaje máximo alto</label>
          <input type="number" class="form-control" id="puntaje_maximo_alto" name="puntaje_maximo_alto" value="{{ $test->puntaje_maximo_alto }}" required>
        </div>
        <div class="mb-3 fondo2">
          <label for="descripcion" class="form-label fondo2">Descripción</label>
          <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $test->descripcion }}" required>
        </div>
        <div class="mb-3 fondo2">
          <label for="id_perfil" class="form-label fondo2">id_perfil</label>
          <input type="number" class="form-control" id="id_perfil" name="id_perfil" value="{{ $test->id_perfil }}" required>
        </div>
        <div class="text-center fondo2 pb-2">
          <button type="submit" class="opciones btn btn-primary">Guardar cambios</button>
        </div>
      </div>
    </div>
  </form>
</div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>