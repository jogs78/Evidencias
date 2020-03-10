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
    <div class="container">
        <form>
            <div class="form-group">
                <label for="inputUsuario">Usuario</label>
                <input type="text" class="form-control" id="inputUsuario" aria-describedby="emailHelp" placeholder="Nombre:">
                <small id="emailHelp" class="form-text text-muted">Escriba el nombre de usuario.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Recordarme</label>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        <hr>
        <a class="btn btn-primary" href="/seleccionar">ENTRAR COMO DOCENTE</a>
        <a class="btn btn-secondary" href="/estudiante">ENTRAR COMO ESTUDIANTE</a>

    </div>
</body>

</html>