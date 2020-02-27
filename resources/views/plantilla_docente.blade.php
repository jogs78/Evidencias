<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="/js/popper.js"></script>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Evidencia</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="/dejar">Dejar</a>
                      <a class="dropdown-item" href="/calificar">Calificar</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">TIPO DE EVIDENCIA</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Estudiantes</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/dejar">Pasar lista</a>
                    <a class="dropdown-item" href="/calificar">Agrupar</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Rubricas</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/dejar">Crear</a>
                    <a class="dropdown-item" href="/calificar">Asignar</a>
                  </div>
                </li>
                <li class="nav-item dropdown invisible">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Rubricas</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/dejar">Crear</a>
                    <a class="dropdown-item" href="/calificar">Asignar</a>
                  </div>
                </li>

              </ul>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link " href="http://evidencias.local/">Salir</a>
                </li>  
              </ul>
            </div>
        </nav>
          <div class="container">
            @yield('content')    
          </div>
</body>
</html>