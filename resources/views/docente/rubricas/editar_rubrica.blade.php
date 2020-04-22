@extends('plantillas.plantilla_docente')
@section('content')
    
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
                    <td></td>
                </tr>
            @empty
            <tr>
                <td colspan="3">SIN ASPECTOS</td>
            </tr>
            @endforelse
            </tbody>
        </table>
        <a href="/crear_criterio" class="btn btn-success">AGREGAR CRITERIO</a>
        <ol>
            <li>Referencias - 5%</li>
            <li>Identificación - 2.5%</li>
            <li>Temporalidad - 2.5%</li>
            <li>Aprendizaje - 22.5</li>
            <li>Saberes - 37.5</li>
        </ol>
        <a href="/crear_criterio" class="btn btn-success">Agregar criterio</a>
    </div>
</div>
<input class="btn btn-primary"  type="submit" value="Crear">
</form>

@endsection
