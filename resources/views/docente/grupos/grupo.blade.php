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
      <tr>
        <td>Agosto - Diciembre 2193</td>
        <td><a href="/lista">s8a</a></td>
        <td>
          <button class="btn btn-primary">Editar</button>
          <button class="btn btn-secondary">Activar</button>
          <a href="/agregar_alumnos" class="btn btn-info">Agregar Alumnos</a>
          <button class="btn btn-danger">Eliminar</button>
        </td>
      </tr>
      <tr>
        <td>Agosto - Diciembre 2193</td>
        <td><a href="/lista">s8a</a></td>
        <td>
          <button class="btn btn-primary">Editar</button>
          <button class="btn btn-secondary">Activar</button>
          <a href="/agregar_alumnos" class="btn btn-info">Agregar Alumnos</a>
          <button class="btn btn-danger">Eliminar</button>
        </td>
      </tr>
      <tr>
        <td>Enero - Junio de 2201</td>
        <td><a href="/lista">s8a</a></td>
        <td>
          <button class="btn btn-primary">Editar</button>
          <button class="btn btn-secondary">Activar</button>
          <a href="/agregar_alumnos" class="btn btn-info">Agregar Alumnos</a>
          <button class="btn btn-danger">Eliminar</button>
        </td>
      </tr>
      <tr>
        <td>2201</td>
        <td><a href="/lista">s8a</a></td>
        <td>
          <button class="btn btn-primary">Editar</button>
          <button class="btn btn-secondary">Activar</button>
          <a href="/agregar_alumnos" class="btn btn-info">Agregar Alumnos</a>
          <button class="btn btn-danger">Eliminar</button>
        </td>
      </tr>
    </tbody>
  </table>
  <button class="btn btn-success">AGREGAR</button>

@endsection
