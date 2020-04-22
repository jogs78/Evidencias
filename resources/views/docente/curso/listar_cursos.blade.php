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


<table class="table table-hover">
  <thead>
    <tr>
      <th>Periodo</th>
      <th>Materia</th>
      <th>Grupo</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
  @forelse ($cursos as $curso)
    <tr @if ($curso->historico())
      class="text-muted"
    @endif  >
      <td>{{$curso->_periodo()}}</td>
      <td>{{$curso->nombre}}</td>
      <td><a href="/lista/{{$curso->id}}">{{$curso->grupo}}</a></td>
      <td>
        @if (!$curso->historico())
        <a href="/curso/{{$curso->id}}/edit" class="btn btn-primary"  style="display: inline">Editar</a>
        <a href="/matricular/{{$curso->id}}" class="btn btn-info"  style="display: inline">Matricular</a>
          @can('eliminar', $curso)
          <form action="/curso/{{$curso->id}}" method="post"  style="display: inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
          </form>              
          @endcan
        @endif
      </td>
    </tr>
  @empty
  <tr>
    <td colspan="3">SIN CRUSOS</td>
  </tr>
  @endforelse

  @foreach ($cursos as $curso)
  @endforeach
  </tbody>
</table>
<a href="curso/create" class="btn btn-success">AGREGAR</a>

@endsection
