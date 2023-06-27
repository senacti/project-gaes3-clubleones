<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <title>Club Leones</title>
</head>
<body>

<!--
  <div class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="fondo container-fluid">
        <div class="fondo d-flex align-items-center">
          <a class="navbar-brand" href="{{url('/')}}"><img class="" height="45px" src="../imagenes/logoempresa.png" alt="">
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="fondo collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="fondo navbar-nav">
            <a class="opciones nav-link" href="{{url('/landing-camp')}}">Campeonatos</a>
            <a class="opciones nav-link" href="{{url('/landing-entre')}}">Entrenamientos</a>
            <a class="opciones nav-link" href="{{url('/landing-acond')}}">Acondicionamiento físico</a>
            <a class="fondo" href="{{url('/login')}}">
              <button type="button" class="opciones btn btn-outline-primary">Iniciar sesión</button>
            </a>
            <a class="fondo" href="{{url('/register')}}">
              <button type="button" class="opciones btn btn-outline-primary">Registrarse</button>
            </a>
          </div>
        </div>
      </div>
    </nav>
  </div>
    <main class="main">
      <div class="contenido container pt-1 pt-md-5">
        <div class="row">
            <div class="col-md">
                <h1 class="title texto display-4">Acondicionamiento físico</h1>
                <p class="texto lead">El acondicionamiento físico que brinda club leones busca determinar el nivel de los interesados y establecer un plan acorde a sus necesidades.
                </p>
            </div>
            {{-- <div class="col-md-6 col-lg-7">
                <img class="img img-fluid" src="../imagenes/acondicionamientofisico.jpg" alt="">
            </div> --}}
        </div>
    </div>
    {{-- <div class="container-fluid">
      <div class="row fondo">
        <div class="col-md-6 fondo">
          <h2 class="texto fondo links">Test</h2>
          <p class="texto fondo links">En club leones podrás presentar los test para establecer un nivel que permita tener un plan de acondicionamiento.</p>
        </div>
        <div class="col-md-6 fondo">
          <h2 class="texto fondo links" >Planes</h2>
          <p class="texto fondo links" >Los planes de acondicionamiento son hechos acorde al nivel del jugador para tener el mejor nivel deportivo.</p>
        </div>
      </div>
    </div> --}}
    <div class="container ">
      <div class="row card-altura">
        <div class="col-md-6">
          <div class="fondo-claro card mb-3 align-items-center">
            <img src="../imagenes/plan.png" class="imagen-card card-img-top" alt="...">
            <div class="card-body ">
              <h5 class="card-title texto">Test</h5>
              <p class="card-text texto">En club leones podrás presentar los test para establecer un nivel que permita tener un plan de acondicionamiento.</p>
              <div class="texto"><a href="{{url('/login')}}" class="btn btn-primary">Ver más</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="fondo-claro card mb-3 align-items-center">
            <img src="../imagenes/dumbbell.png" class="imagen-card card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title texto">Plan</h5>
              <p class="card-text texto">Los planes de acondicionamiento son hechos acorde al nivel del jugador para tener el mejor nivel deportivo.</p>
              <div class="texto"><a href="{{url('/login')}}" class="btn btn-primary">Ver más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </main>
    -->

    <header id="header">
        <div class="container__header">
            <div class="logo">
                <img src="imagenes/logoempresa3.png" alt="">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="container__nav">
                <nav id="nav">
                    <ul>
                        <li><a href="{{url('/landingpage')}}" class="select opciones nav-link">INICIO</a></li>
                        <li><a class="opciones nav-link" href="{{url('/landing-camp')}}">CAMPEONATOS</a></li>
                        <li><a class="opciones nav-link" href="{{url('/landing-entre')}}">ENTRENAMIENTOS</a></li>
                        <li><a class="opciones nav-link" href="{{url('/landing-acond')}}">ACONDICIONAMIENTO FISICO</a></li>
                        <a class="fondo" href="{{url('/login')}}">
                <button type="button" class="opciones btn btn-outline-primary">Iniciar sesión</button>
              </a>
              <a class="fondo" href="{{url('/register')}}">
                <button type="button" class="opciones btn btn-outline-primary">Registrarse</button>
              </a>
                    </ul>
                </nav>
                <div class="btn__menu" id="btn_menu"><i class="fas fa-bars"></i></div>
            </div>
        </div>
    </header>

    <div class="container_all" id="container__all">
        <div class="cover">

            <!--animacion del wave-->

                <div class="bg_color"></div>
                <div class="wave w1"></div>
                <div class="wave w2"></div>


            <div class="container__cover">
                <div class="container__info">
                    <h1>ACONDICIO-</h1>
                    <h2>NAMIENTO FISICO</h2>
                    <p class="fs-5 fw-semibold">El acondicionamiento físico que brinda club leones busca determinar el nivel de los interesados y establecer un plan acorde a sus necesidades.</p>
                    <p type="" value="">
                </div>
                <div class="col-md-6 col-lg-7">
                <img class="img img-fluid" src="../imagenes/Condicion.jpg" alt="">
            </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>