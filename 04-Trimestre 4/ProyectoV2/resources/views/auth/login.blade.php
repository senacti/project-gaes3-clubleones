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

  <div class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="fondo container-fluid justify-content-center">
        <div class="fondo d-flex align-items-center">
          {{-- <a class="navbar-brand" href="{{url('/')}}">LOGO</a> --}}
          <a class="empresa nav-link" href="{{url('/')}}">Club Leones</a>
        </div>
      </div>
    </nav>
  </div>
      <div class="container pt-4 text-center">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8">
            <div class="caja-login p-4">
              <h2 class="fondo ">Iniciar sesión</h2>
              <form class="fondo" action="{{ route('authenticate') }}" method="post">
                @csrf
                <div class="fondo mb-3">
                  <label for="email" class="fondo form-label">Correo electrónico</label>
                  <input name="email" type="email" class="form-control ml-3" id="email" placeholder="Ingrese su correo electrónico">
                </div>
                <div class="fondo mb-3">
                  <label for="password" class="fondo form-label">Contraseña</label>
                  <input name="password" type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
                </div>
                <div class="fondo mb-3">
                  <a class="fondo" href="#">¿Olvidó su contraseña?</a>
                </div>
                {{-- <a href="../dashboard/dashboard.html"> --}}
                <button type="submit" class="btn btn-primary mb-3">Iniciar sesión</button> 
                <!-- el type del button anterior debe ser submit, para efectos de este codigo por ahora será type=button -->
              {{-- </a> --}}
              </form>
              <div class="fondo">
                <p class="fondo" style="display: inline;">¿Aún no tienes una cuenta? </p><a class="fondo" href="{{url('/register')}}">¿Regístrate!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>