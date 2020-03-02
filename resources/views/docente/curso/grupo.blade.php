@extends('plantillas.plantilla_docente')
@section('content')
Seleccione el grupo con el que trabajará<br>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Periodo</th>
        <th>Grupo</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr class="text-muted">
        <td>Agosto - Diciembre 2193</td>
        <td><a href="/lista">s8a</a></td>
        <td>
        </td>
      </tr>
      <tr class="text-muted">
        <td>Agosto - Diciembre 2193</td>
        <td><a href="/lista">s8b</a></td>
        <td>
        </td>
      </tr>
      <tr>
        <td>Enero - Junio de 2020</td>
        <td><a href="/diario">s8a</a></td>
        <td>
          <button class="btn btn-primary">Editar</button>
          <button class="btn btn-secondary">Activar</button>
          <a href="/agregar_estudiante" class="btn btn-info">Matricular</a>
          <button class="btn btn-danger">Eliminar</button>
        </td>
      </tr>
      <tr>
        <td>Enero - Junio de 2020</td>
        <td><a href="/diario">s8b</a></td>
        <td>
          <button class="btn btn-primary">Editar</button>
          <button class="btn btn-secondary">Activar</button>
          <a href="/agregar_estudiante" class="btn btn-info">Matricular</a>
          <button class="btn btn-danger">Eliminar</button>
        </td>
      </tr>
    </tbody>
  </table>
  <a href="agregar_curso" class="btn btn-success">AGREGAR</a>

@endsection
