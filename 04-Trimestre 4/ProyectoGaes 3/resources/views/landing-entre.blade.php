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
      <div class="container carrusel pt-5">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../imagenes/entrena2.png" class="carrusel-imagen d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../imagenes/entrena1.png" class="carrusel-imagen d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../imagenes/entrena3.png" class="carrusel-imagen d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
      <div class="contenido container pt-1 pt-md-5">
        <div class="row">
            <div class="col-md">
                <h1 class="title display-4 texto">Entrenamientos</h1>
                <p class="texto lead">Club Leones ofrece el servicio de entrenamientos para las personas del sector interesadas en practicar y mejorar sus habilidades en el micro-futbol.
                </p>
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
                    <h1 class="text-center">ENTRENAMIENTOS</h1>
                    <p class="fs-4 fw-semibold">Club Leones ofrece el servicio de entrenamientos para las personas del sector interesadas en practicar y mejorar sus habilidades en el micro-futbol.</p>
                    <p type="" value="">
                </div>
            </div>
            
            <div class="container__vector">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../imagenes/entrena2.png" class="carrusel-imagen d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../imagenes/entrena1.png" class="carrusel-imagen d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../imagenes/entrena3.png" class="carrusel-imagen d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
                </div>

            
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>