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
                <li class="nav-item">
                  <a class="nav-link"   href="/listar_evidencias">Evidencias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"   href="/listar_rubricas">Rubricas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"   href="/curso">Curso</a>
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