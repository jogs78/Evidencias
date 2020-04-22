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

@if (\Session::has('error'))
<div class="alert alert-danger alert-dismissible">
  {{ \Session::get('error') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br />
@endif



<h5 class="card-title">Lista de rubicas para el grupo: "___ del periodo _____"</h5><br>

<table class="table table-hover">
    <thead>
      <tr>
        <th>Rubrica</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($rubricas as $rubrica)
        <tr>
            <td><a href="/rubrica/{{$rubrica->id}}/edit" >{{$rubrica->tipo_de}}</a></td>
            <td><form action="/rubrica/{{$rubrica->id}}" method="post" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
              </form></td>
        </tr>
    @empty
    <tr>
        <td colspan="2">SIN RUBRICAS REGISTRADAS</td>
    </tr>
    @endforelse
    </tbody>
</table>
<br>
    <a class="btn btn-success" href="/rubrica/create">Crear nueva rubrica</a>

@endsection
