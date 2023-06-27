<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <title>Club Leones inicia sesión</title>
</head>
<body class="body">
  <!--
      {{-- <div class="container pt-4 text-center">
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
                {{-- <a href="../dashboard/dashboard.html"> 
                <button type="submit" class="btn btn-primary mb-3">Iniciar sesión</button> 
                <!-- el type del button anterior debe ser submit, para efectos de este codigo por ahora será type=button -->
              <!--
                {{-- </a> 
              </form>
              <div class="fondo">
                <p class="fondo" style="display: inline;">¿Aún no tienes una cuenta? </p><a class="fondo" href="{{url('/register')}}">¿Regístrate!</a>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      <!--
      <div class="container pt-4">
        <div class="row justify-content-center">
          <div class="col-md-5">
            <img class="img-fluid d-none d-md-block" src="../imagenes/balonlogin2.png" alt="">
          </div>
          <div class="col-md-7">
            <div class="caja-login p-4">
              <h2 class="fondo texto">Iniciar sesión</h2>
              <div class="texto fondo"><i class="bi bi-people-fill" ></i></div>
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
                <div class="fondo textoderecha mb-3">
                  <a class="fondo links" href="#">¿Olvidó su contraseña?</a>
                </div>
                <div class="texto fondo">
                  <button type="submit" class="btn btn-primary mb-3">Iniciar sesión</button>
                </div>
              </form>
              <div class="fondo texto">
                <p class="fondo" style="display: inline;">¿Aún no tienes una cuenta? </p><a class="fondo links" href="{{url('/register')}}">¿Regístrate!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      -->
      <header id="header">
        <div class="container__header">
            <div class="logo2">
                <a class="navbar-brand" href="{{url('/landingpage')}}"><img src="imagenes/logoempresa3.png" alt=""></a>
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
            {{-- <div class="container pt-4 text-center">
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
                {{-- <a href="../dashboard/dashboard.html"> 
                <button type="submit" class="btn btn-primary mb-3">Iniciar sesión</button> 
                <!-- el type del button anterior debe ser submit, para efectos de este codigo por ahora será type=button -->
              
                {{-- </a> 
              </form>
              <div class="fondo mb-3">
                <p class="fondo" style="display: inline;">¿Aún no tienes una cuenta? </p><a class="fondo" href="{{url('/register')}}">¿Regístrate!</a>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      
      <div class="container pt-4">
        <div class="row justify-content-center">
          <div class="col-md-5">
            <img class="img-fluid d-none d-md-block" src="../imagenes/balonlogin2.png" alt="">
          </div>
          <div class="col-md-7">
            <div class="caja-login p-4">
              <h2 class="fondo texto">Iniciar sesión</h2>
              <div class="texto fondo"><i class="bi bi-people-fill" ></i></div>
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
                <div class="fondo textoderecha mb-3">
                  <a class="fondo links" href="#">¿Olvidó su contraseña?</a>
                </div>
                <div class="texto fondo">
                  <button type="submit" class="btn btn-primary mb-3">Iniciar sesión</button>
                </div>
              </form>
              <div class="fondo texto mb-3">
                <p class="fondo" style="display: inline;">¿Aún no tienes una cuenta? </p><a class="fondo links" href="{{url('/register')}}">¿Regístrate!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>

      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>