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
        <td>Enero - Junio de 2020</td>
        <td>s8a</td>
        <td>
          <button class="btn btn-secondary">Activar</button>
        </td>
      </tr>
      <tr>
        <td>Enero - Junio de 2020</td>
        <td>s8b</td>
        <td>
          <button class="btn btn-secondary">Activar</button>
        </td>
      </tr>
    </tbody>
  </table>
@endsection
