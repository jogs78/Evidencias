@extends('plantillas.plantilla_docente')
@section('content')

@if (\Session::has('success'))
<div class="alert alert-success alert-dismissible">
  {{ \Session::get('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br />
@endif

@if (\Session::has('warning'))
<div class="alert alert-info alert-dismissible">
  {{ \Session::get('warning') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br />
@endif

@if (\Session::has('error'))
<div class="alert alert-danger alert-dismissible">
  {{ \Session::get('error') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br />
@endif



Seleccione el grupo con el que trabajará, actualmente esta seleccionado "{{$activo->nombre}} del {{$activo->grupo}}"<br>  
<br>

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
        @if ($curso->activo == false)
        <a href="/activar/{{$curso->id}}" class="btn btn-secondary">Activar</a>          
        @else
          Activo            
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


@endsection
