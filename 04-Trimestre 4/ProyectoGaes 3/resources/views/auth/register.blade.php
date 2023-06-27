<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <title>Club Leones registro</title>
</head>
<body class="body">

<!--
  <div class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="fondo container-fluid justify-content-center">
        <div class="fondo d-flex align-items-center">
          <a class="navbar-brand" href="{{url('/')}}"><img class="" height="45px" src="../imagenes/logoempresa.png" alt="">
          </a>
        </div>
      </div>
    </nav>
  </div>
      {{-- <div class="container pt-4 text-center">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8">
            <div class="caja-register p-4">
              <h2 class="fondo mt-3">Registrarse</h2>
              <form class="fondo" action="{{ route('store') }}" method="post">
                @csrf
                <div class="fondo pb-3">
                  <label for="name" class="fondo form-label">Nombre completo</label>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Ingrese su nombre">
                </div>
                <div class="fondo pb-3">
                  <label for="email" class="fondo form-label">Correo electrónico</label>
                  <input name="email" type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico">
                </div>
                <div class="fondo pb-3">
                  <label for="password" class="fondo form-label">Contraseña</label>
                  <input name="password" type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
                </div>
                <div class="fondo pb-3">
                  <label for="password_confirmation" class="fondo form-label">Confirmar contraseña</label>
                  <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Confirme su contraseña">
                </div>
                {{-- <a href="../dashboard/dashboard.html"> 
                <button type="submit" class="btn btn-primary pb-3">Registrarse</button>
                <!-- el type del button anterior debe ser submit, para efectos de este codigo por ahora será type=button -->
              <!--
                {{-- </a> 
              </form>
              <div class="fondo">
                <p class="fondo" style="display: inline;">¿Ya tienes una cuenta? </p><a class="fondo " href="{{url('/login')}}">¿Inicia sesión!</a>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      <div class="container pt-4">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="imagen"><img class="img-fluid d-none d-md-block" src="../imagenes/balonlogin2.png" alt="">
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-6">
            <!-- Columna 2 -->
           <!--
            <div class="caja-register p-4">
              <h2 class="fondo texto mt-3">Registrarse</h2>
              <form class="fondo" action="{{ route('store') }}" method="post">
                @csrf
                <div class="fondo pb-3">
                  <label for="name" class="fondo form-label">Nombre completo</label>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Ingrese su nombre">
                </div>
                <div class="fondo pb-3">
                  <label for="email" class="fondo form-label">Correo electrónico</label>
                  <input name="email" type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico">
                </div>
                <div class="fondo pb-3">
                  <label for="password" class="fondo form-label">Contraseña</label>
                  <input name="password" type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
                </div>
                <div class="fondo pb-3">
                  <label for="password_confirmation" class="fondo form-label">Confirmar contraseña</label>
                  <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Confirme su contraseña">
                </div>
                <div class="fondo texto pb-3"><button type="submit" class="btn btn-primary pb-3">Registrarse</button>
                </div>
                <div class="fondo textoderecha">
                  <p class="fondo" style="display: inline;">¿Ya tienes una cuenta? </p><a class="fondo links" href="{{url('/login')}}">¿Inicia sesión!</a>
                </div>
              </form>
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
            <div class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="fondo container-fluid justify-content-center">
      </div>
    </nav>
  </div>
      {{-- <div class="container pt-4 text-center">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8">
            <div class="caja-register p-4">
              <h2 class="fondo mt-3">Registrarse</h2>
              <form class="fondo" action="{{ route('store') }}" method="post">
                @csrf
                <div class="fondo pb-3">
                  <label for="name" class="fondo form-label">Nombre completo</label>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Ingrese su nombre">
                </div>
                <div class="fondo pb-3">
                  <label for="email" class="fondo form-label">Correo electrónico</label>
                  <input name="email" type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico">
                </div>
                <div class="fondo pb-3">
                  <label for="password" class="fondo form-label">Contraseña</label>
                  <input name="password" type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
                </div>
                <div class="fondo pb-3">
                  <label for="password_confirmation" class="fondo form-label">Confirmar contraseña</label>
                  <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Confirme su contraseña">
                </div>
                {{-- <a href="../dashboard/dashboard.html"> 
                <button type="submit" class="btn btn-primary pb-3">Registrarse</button>
                <!-- el type del button anterior debe ser submit, para efectos de este codigo por ahora será type=button -->
                {{-- </a> 
              </form>
              <div class="fondo">
                <p class="fondo" style="display: inline;">¿Ya tienes una cuenta? </p><a class="fondo " href="{{url('/login')}}">¿Inicia sesión!</a>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      <div class="container pt-4">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="imagen"><img class="img-fluid d-none d-md-block" src="../imagenes/balonlogin2.png" alt="">
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-6">
            <!-- Columna 2 -->
            <div class="caja-register p-4">
              <h2 class="fondo texto mt-3">Registrarse</h2>
              <form class="fondo" action="{{ route('store') }}" method="post">
                @csrf
                <div class="fondo pb-3">
                  <label for="name" class="fondo form-label">Nombre completo</label>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Ingrese su nombre">
                </div>
                <div class="fondo pb-3">
                  <label for="email" class="fondo form-label">Correo electrónico</label>
                  <input name="email" type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico">
                </div>
                <div class="fondo pb-3">
                  <label for="password" class="fondo form-label">Contraseña</label>
                  <input name="password" type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
                </div>
                <div class="fondo pb-3">
                  <label for="password_confirmation" class="fondo form-label">Confirmar contraseña</label>
                  <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Confirme su contraseña">
                </div>
                <div class="fondo texto pb-3"><button type="submit" class="btn btn-primary pb-3">Registrarse</button>
                </div>
                <div class="fondo textoderecha">
                  <p class="fondo" style="display: inline;">¿Ya tienes una cuenta? </p><a class="fondo links" href="{{url('/login')}}">¿Inicia sesión!</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>