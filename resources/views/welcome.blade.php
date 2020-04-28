<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts 
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        -->
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    EVIDENCIAS
                </div>
                requisitos:<br>

                ACCIONES QUE REALIZA EL DOCENTE
                <br>
                 
                
                r1.   Al crear un curso debe especificar (se revisa el CRUD completo):<br>
                
                ·       No solo el nombre de la materia, tambien el grupo<br>
                
                ·       El perido estara dado por  las  fecha_inicio y fecha_fin<br>
                
                ·       Por default un grupo no esta activo hasta que los seleccionan<br>
                
                ·       El numero de unidades que tiene la materia<br>
                
                ·       El objetivo general que se busca cumplir en la materia (descripcion)<br><br>
                
                r2.   Activar un curso: esto signfica que le listara los cursos que el docente tenga activos (se encuentren en el periodo actual, es decir que la fecha de hoy se encuentre en el rango de las fechas de inicio y fin), solo puede haber un curso activo y este será en el que se asignen las evidencias, se pase lista, etc.<br>
                
                r3.   Al crear una RUBRICA (aparte de especificar su tipo y saber quien fue su autor) , se revisa que puedar realizar el CRUD completo<br>
                
                r4.   Para cada ASPECTO  de una rubrica debe establecer (se revisa el CRUD completo):<br>
                
                ·       Titulo (criterio)<br>
                
                ·       Porcentaje de la calificación que dado a este aspecto (poderacion)<br>
                
                ·       Descripcion de cómo debe ser para que tenga una aceptacion optima (aceptacion_optima)<br>
                
                ·       Descripcion de cómo debe ser para que tenga una aceptacion media (aceptacion_ media)<br>
                
                ·       Descripcion de cómo debe ser para que no tenga aceptacion (aceptacion_ nula)<br><br>
                
                 
                
                r5.   Al crear una EVIDENCIA debe especificar:<br>
                
                ·       El TIPO DE EVIDENCIA (es decir que tipo de rubrica se usará):<br>
                
                ·       El numero de unidad en la matería<br>
                
                ·       Los aspectos a investigar<br>
                
                ·       Los aspectos a demostrar<br><br>
                
                 
                
                ACCIONES QUE REALIZA EL ESTUDIANTE<br>
                
                 
                
                r11. Puede conocer un historico de cursos en los que estubo matriculado y ya han terminado, conociendo en este caso su calificación<br>
                
                r12. Puede conocer los cursos en los que esta matriculado, en estos podra ver las evidencias que han quedado y en este listado puede:<br>
                
                ·       Entregar una evidencia, si ya la entrego podra ver la fecha en que subio el archivo, si tiene calificacion y observaciones<br>
                
                 
            </div>
        </div>
    </body>
</html>
