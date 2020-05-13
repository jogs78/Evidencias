<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="/js/popper.js"></script>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/axios.min.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link"   href="/evidencia">Evidencias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"   href="/rubrica">Rubricas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"   href="/curso">Curso</a>
                </li>
                <li class="nav-item dropdown">
                  <a id="curso_activo" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Curso Activo
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="curso_activo">
                    <a class="dropdown-item"   href="/matricular">Matricular</a>
                    <a class="dropdown-item"   href="/pasar_lista">Pasar Lista</a>
                    <a class="dropdown-item"   href="/equipos">Equipos</a>
                  </div>

                </li>

              </ul>

              <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"   href="/seleccionar">Seleccionar Curso</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>

                  </div>
              </li>
              </ul>
            </div>
        </nav>
          <div class="container">
            @yield('content')    
          </div>
</body>
@yield('codigo')
</html>