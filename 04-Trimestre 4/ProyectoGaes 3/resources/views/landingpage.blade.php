<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Club Leones</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

</head>
<body>

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
                    <h1>CLUB</h1>
                    <h2>LEONES</h2>
                    <p class="fs-4 fw-semibold">Club Leones ofrece servicios para los interesados en el micro-futbol, campeonatos para la competencia, entrenamientos para la mejora y acondicionamiento físico para el desarrollo personal.</p>
                    <p type="" value="">
                </div>
                <div class="container__vector">
                    <img src="imagenes/disparo.png" alt="">
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>