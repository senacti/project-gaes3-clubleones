<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/Style2.css') }}"> 
    <title>Document</title>
    
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand mx-auto" href="{{url('/')}}">Club Leones</a>
          
        </div>
      </nav>

    <div class="formulario">
        <h1>Registrate</h1>
        <form method="post">
            <div class="username">
                <input type="text" required>
                <label>Nombre de usuario</label>
            </div>
            <div class="correo">
                <input type="email" required>
                <label>Correo electronico</label>
            </div>
            <div class="contraseña">
                <input type="password" required>
                <label>Contraseña</label>
            </div>
            <div class="contra">
                <input type="password" required>
                <label>Confirmar contraseña</label>
            </div>
            <input type="submit" value="Crear cuenta">
            <div class="registrarse">
                ¿Ya tienes una cuenta? <a href="{{url('/login')}}">inicia sesión</a>
            </div>

        </form>

    </div>
</body>
</html>