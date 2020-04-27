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


<form action="/rubrica/{{$rubrica->id}}" method="post">
    @method('PUT')
    @csrf
<div class="card">
    <h5 class="card-header">Tipo</h5>
    <div class="card-body">
        <div class="form-group">
            <input class="form-control"  type="text" name="tipo_de" id="tipo_de"  value="{{$rubrica->tipo_de}}">
          </div>
    </div>
</div>
<div class="card">
    <h5 class="card-header">Criterios</h5>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>Aspecto</th>
                <th>Puntuacion</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
            @forelse ($rubrica->aspectos as $aspecto)
                <tr>
                    <td>{{$aspecto->criterio}}</td>
                    <td>{{$aspecto->ponderacion}}</td>
                    <td>
                            @can('edit',  $aspecto)
                                <a href="/aspecto/{{$aspecto->id}}/edit" class="btn btn-primary"  style="display: inline">Editar</a>                            
                            @endcan
                            @can('eliminar', $aspecto)
                            <form action="/aspecto/{{$aspecto->id}}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                            @endcan
            
                    </td>
                </tr>
            @empty
            <tr>
                <td colspan="3">SIN ASPECTOS</td>
            </tr>
            @endforelse
            </tbody>
        </table>
        <a href="/aspecto/create/{{$rubrica->id}}" class="btn btn-success">Agregar criterio</a>
    </div>
</div>
<input class="btn btn-primary"  type="submit" value="Actualizar">
</form>

@endsection
