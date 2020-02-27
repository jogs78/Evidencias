@extends('plantilla_docente')
@section('content')

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Periodo</th>
        <th scope="col">Grupo</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>2193</td>
        <td>s8a</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>2193</td>
        <td>s8b</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>2201</td>
        <td>s8a</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>2201</td>
        <td>s8b</td>
        <td>@fat</td>
      </tr>
    </tbody>
  </table>


@endsection
