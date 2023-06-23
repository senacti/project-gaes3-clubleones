<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Landingpage</title>
</head>
<body>
    <div class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="fondo container-fluid">
          <div class="fondo d-flex align-items-center">
            {{-- <a class="navbar-brand" href="{{url('/')}}">LOGO</a> --}}
            <a class="empresa nav-link" href="{{url('/')}}">Club Leones</a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="fondo collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="fondo navbar-nav">
              <a class="nav-link" href="{{url('/landing-camp')}}">Campeonatos</a>
              <a class="nav-link" href="{{url('/landing-entre')}}">Entrenamientos</a>
              <a class="nav-link" href="{{url('/landing-acond')}}">Acondicionamiento físico</a>
              <a class="fondo" href="{{url('/login')}}">
                <button type="button" class="btn btn-outline-primary">Iniciar sesión</button>
              </a>
              <a class="fondo" href="{{url('/register')}}">
                <button type="button" class="btn btn-outline-primary">Registrarse</button>
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <main class="main">
      <div class="contenido container pt-1 pt-md-5">
        <div class="row">
            <div class="col-md-6 col-lg-5">
                <h1 class="title display-4">Entrenamientos</h1>
                <p class="text lead">Club Leones ofrece el servicio de entrenamientos para las personas del sector interesadas en practicar y mejorar sus habilidades en el micro-futbol.
                </p>
            </div>
            <div class="col-md-6 col-lg-7">
                <img class="img img-fluid" src="../imagenes/entrenamiento.png" alt="">
            </div>
        </div>
    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>