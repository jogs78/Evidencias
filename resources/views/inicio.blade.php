<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/popper.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>

    <form action="/validar" method="post">
        @csrf
        nombre:        <input type="text" name="nombre" id=""><br>
        contraseña     <input type="text" name="contra" id=""><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>