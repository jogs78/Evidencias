<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/popper.js"></script>




</head>
<body>
    SISTEMA DE EVIDENCIAS
    <form action="/entrada/4" method="post">
        @csrf
        Nombre:  <input type="text" name="nombree" id=""><br>
        password:<input type="text" name="passwde" id=""><br>
    <input type="submit" value="Enviar">
    </form>


    <hr>
    <a class="btn btn-primary" href="/docente">ENTRAR COMO DOCENTE</a>
    <a class="btn btn-secondary" href="/estudiante">ENTRAR COMO ESTUDIANTE</a>
</body>
</html>