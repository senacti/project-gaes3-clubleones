<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../Css/Style.css">

<title>Club Leones</title>
</head>
<body>
<header class="barranavegacion">
    <div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="{{url('/Dashboard')}}">Club Leones</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
         
        </div>
      </nav>    
    </div>
</header>

<div class="todo">
    <div class="dashboard"><!-- Aquí empieza el codigo del menu lateral -->
        <div class="lateral">
        <div class="accordion " id="accordionExample">
    
    
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Campeonatos
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="list-group">
                    <a href="{{url('/CrearCampe')}}" class="list-group-item list-group-item-action">Crear campeonato</a>
                    <a href="{{url('/CrearProgra')}}" class="list-group-item list-group-item-action">Crear programación</a>
                    <a href="{{url('/AgregarEqui')}}" class="list-group-item list-group-item-action">Agregar equipos</a>
                    <a href="{{url('/Partidos')}}" class="list-group-item list-group-item-action">Partidos</a>
                    
                  </div>    
                        </div>
              </div>
            </div>
    
    
    
    
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Acondicionamiento físico
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="list-group">
                    <a href="{{url('/VerPerfiles')}}" class="list-group-item list-group-item-action">Revisar perfiles</a>
                    <a href="{{url('/RegistrarTest')}}" class="list-group-item list-group-item-action">Registrar test</a>
                    <a href="{{url('/RegistrarPlan')}}" class="list-group-item list-group-item-action">Registrar plan</a>
                    
                  </div>           </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Entrenamientos
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="list-group">
                    <a href="{{url('/RegistrarEntre')}}" class="list-group-item list-group-item-action">Registrar entrenamientos</a>
                    <a href="{{url('/VerEntre')}}" class="list-group-item list-group-item-action">Ver entrenamientos</a>   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="contenido">
      <div class="contenido1">
        <h1 class="title">Registrar plan</h1>

        <form action="/formulario" method="GET">

            <div class="col-sm ml-auto">
                <table>
                  <thead>
                    <tr>
                      <th>Categoría</th>
                      <th>Tipo</th>
                      <th>Descripción</th>
                      <th>Ejercicios</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <input value="" type="text" id="categoria" name="categoria" placeholder=""/>
                      </td>
                      <td>
                        <input value="" type="text" id="tipo" name="tipo" placeholder=""/>
                      </td>
                      <td>
                        <input value="" type="text" id="descripción" name="descripción" placeholder=""/>
                      </td>
                      <td>
                        <input value="" type="text" id="ejercicios" name="ejercicios" placeholder=""/>
                      </td>

                    </tr>
                    <button class="boton" type="submit">Agregar</button>
                  <button class="boton" type="submit">Editar</button>
                  <button class="boton" type="submit">Eliminar</button>
                    <tr>
                      <td>Bajo</td>
                      <td>flexibilidad</td>
                      <td>Este es el plan de acondicionamiento que debe seguir para tener la flexibilidad adecuada</td>
                      <td>Estiramiento de cobra, tocar punta de pies con manos, abrirse de piernas</td>
                      
                    </tr>
        
                    <tr>
                      <td>Medio</td>
                      <td>Resistencia</td>
                      <td>Este es el plan de acondicionamiento que debe seguir para tener la resistencia adecuada</td>
                      <td>saltar lazo 10 minutos, hacer 10 burpees, hacer 30 saltos de tijera</td>
                     
                    </tr>
                    <tr>
                      <td>Alto</td>
                      <td>Fuerza</td>
                      <td>Este es el plan de acondicionamiento que debe seguir para tener la fuerza adecuada</td>
                      <td>30 flexiones, 30 fondos, 30 abdominales, 30 sentadillas</td>
                    
                    </tr>
        
                    <tr>
                        <td>Bajo</td>
                        <td>flexibilidad</td>
                        <td>Este es el plan de acondicionamiento que debe seguir para tener la flexibilidad adecuada</td>
                        <td>Estiramiento de cobra, tocar punta de pies con manos, abrirse de piernas</td>
                        
                      </tr>
          
                      <tr>
                        <td>Medio</td>
                        <td>Resistencia</td>
                        <td>Este es el plan de acondicionamiento que debe seguir para tener la resistencia adecuada</td>
                        <td>saltar lazo 10 minutos, hacer 10 burpees, hacer 30 saltos de tijera</td>
                       
                      </tr>
                      <tr>
                        <td>Alto</td>
                        <td>Fuerza</td>
                        <td>Este es el plan de acondicionamiento que debe seguir para tener la fuerza adecuada</td>
                        <td>30 flexiones, 30 fondos, 30 abdominales, 30 sentadillas</td>
                      
                      </tr>
          
                    
                  </tbody>
                </table>
                <button class="boton" type="submit">Enviar datos</button>
      
            </div>
            </form>
    </div>
      </div>
    </div>
  



    
</body>
</html>