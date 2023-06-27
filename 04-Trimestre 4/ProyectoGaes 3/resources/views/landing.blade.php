<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Club Leones</title>
    
</head>

<body>
{{-- html de la navbar --}}
<div class="circulo"></div>
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
    <!-- html del contenido principal -->
    <main class="main">
      <div class="contenido container pt-1 pt-md-5">
        <div class="row">
            <div class="col-md ">
                <h1 class="title display-4 texto fw-bold">Club Leones</h1>
                <p class="texto lead fw-semibold">Club Leones ofrece servicios para los interesados en el micro-futbol, campeonatos para la competencia, entrenamientos para la mejora y acondicionamiento físico para el desarrollo personal.
                </p>
            </div>
            {{-- <div class="col-md-6 col-lg-7">
                <img class="img img-fluid" src="../imagenes/DIFERENCIASART.png" alt="">
            </div> --}}
        </div>
    </div>
    <div class="container ">
      <div class="row card-altura">
        <div class="col-md-4">
          <div class="fondo-claro card mb-3 align-items-center">
            <img src="../imagenes/trophy.png" class="imagen-card card-img-top" alt="...">
            <div class="card-body ">
              <h5 class="card-title texto">Campeonatos</h5>
              <p class="card-text texto">Club Leones organiza y dirige campeonatos para los equipos del sector. En esta sección podrás visualizar los partidos jugados del campeonato actual con su resultado y los partidos que se jugarán próximamente.</p>
              <div class="texto"><a href="{{url('/landing-camp')}}" class="btn btn-primary">Ir a campeonatos</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="fondo-claro card mb-3 align-items-center">
            <img src="../imagenes/football.png" class="imagen-card card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title texto">Entrenamientos</h5>
              <p class="card-text texto">Club Leones ofrece el servicio de entrenamientos para las personas del sector interesadas en practicar y mejorar sus habilidades en el micro-futbol.</p>
              <div class="texto"><a href="{{url('/landing-entre')}}" class="btn btn-primary">Ir a entrenamientos</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="fondo-claro card mb-3 align-items-center">
            <img src="../imagenes/dumbbell.png" class="imagen-card card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title texto">Plan acondicionamiento</h5>
              <p class="card-text texto">El acondicionamiento físico que brinda club leones busca determinar el nivel de los interesados y establecer un plan acorde a sus necesidades.</p>
              <div class="texto"><a href="{{url('/landing-acond')}}" class="btn btn-primary">Ir a plan acondicionamiento</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    </main>
    {{-- <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 fondo">
            <h5 class="footer-title fondo">Información de contacto</h5>
            <ul class="footer-list fondo">
              <li>Dirección: Calle Principal, Ciudad</li>
              <li>Teléfono: 123-456-7890</li>
              <li>Email: info@example.com</li>
            </ul>
          </div>
          <div class="col-md-6 fondo">
            <h5 class="footer-title">Enlaces útiles</h5>
            <ul class="footer-list fondo">
              <li><a href="#">Acerca de nosotros</a></li>
              <li><a href="#">Servicios</a></li>
              <li><a href="#">Política de privacidad</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer> --}}
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>