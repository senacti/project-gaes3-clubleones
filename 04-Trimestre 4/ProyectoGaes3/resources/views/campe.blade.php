<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{ asset('css/Style3.css') }}">
<title>Club Leones</title>
</head>
<body>

    
        <div class="circulo1A"></div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{url('/')}}">Club Leones</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Acondicionamiento físico</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/entre')}}">Entrenamientos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/campe')}}">Campeonatos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/login')}}"><button type="button" class="btn btn-outline-secondary">Iniciar sesión</button>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/registro')}}"><button type="button" class="btn btn-outline-secondary">Registrarse</button>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <div class="contenido1A">
        <div class="tituloBox1A">
            <h1>Campeonatos</h1>
            <h4>Club Leones organiza y dirige campeonatos para los equipos del sector. 
                En esta sección podrás visualizar los partidos 
                jugados del campeonato actual con su resultado y los partidos que se jugarán próximamente.
            </h4>
           
        </div>
        
    </div>
    

    <div class="contenido">
      <div class="contenido1">
        <h1 class="title">Partidos</h1>
        <form action="/formulario" method="GET">

          <div class="col-sm ml-auto">
              <table>
              
                    
                    <tr>
                        <th>Equipo local</th>
                        <th>Resultado</th>
                        <th>Equipo visitante</th>
                      </tr>
                      <tr>
                        <td>Real Madrid</td>
                        <td>VS</td>
                        <td>FC Barcelona</td>
                      </tr>
                      <tr>
                        <td>Manchester United</td>
                        <td>VS</td>
                        <td>Liverpool</td>
                      </tr>
                      <tr>
                        <td>Juventus</td>
                        <td>VS</td>
                        <td>Inter de Milán</td>
                      </tr>
                      <tr>
                        <td>Arsenal FC</td>
                        <td>VS</td>
                        <td>AS Monaco FC</td>
                      </tr>
                      <tr>
                        <td>Olympiacos FC</td>
                        <td>VS</td>
                        <td>FC Sheriff Tiraspol</td>
                      </tr>
                      <tr>
                        <td>AS Roma</td>
                        <td>VS</td>
                        <td>Sevilla FC</td>
                      </tr>
                      <tr>
                        <td>Manchester City</td>
                        <td>VS</td>
                        <td>Chelsea</td>
                      </tr>



    
</body>
</html>