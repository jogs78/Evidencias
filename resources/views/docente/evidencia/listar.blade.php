@extends('plantillas.plantilla_docente')
@section('content')

@if (\Session::has('success'))
<div class="alert alert-success">
  <p>{{ \Session::get('success') }}</p>
</div><br />
@endif

@if (\Session::has('error'))
<div class="alert alert-danger">
  <p>{{ \Session::get('error') }}</p>
</div><br />
@endif

<h5 class="card-title">Lista de evidencias para el grupo: "{{$activo->grupo}}" del "{{$activo->_periodo()}}" en la materia "{{$activo->nombre}}"</h5><br>
<br>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Evidencia</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
  @forelse ($evidencias as $evidencia)
    <tr>
      <td>{{$evidencia->titulo}}</td>
      <td>
        <a href="/evidencia/{{$evidencia->id}}/edit" class="btn btn-primary"  style="display: inline">Editar</a>
          @can('eliminar', $evidencia)
            <form action="/evidencia/{{$evidencia->id}}" method="post"  style="display: inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>              
          @endcan
      </td>
    </tr>
  @empty
  <tr>
    <td colspan="2">SIN EVIDENCIAS</td>
  </tr>
  @endforelse
  </tbody>
</table>
<a href="evidencia/create" class="btn btn-success">CREAR</a>


@endsection
