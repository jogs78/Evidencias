@extends('plantillas.plantilla_docente')
@section('content')
<form action="/curso/{{$curso->id}}" method="post">
@method('PUT')
@csrf
<div class="card">
    <h5 class="card-header">Curso:  </h5>
    <div class="card-body">
        <div class="form-group">
            <div class="row">
                <div class="col-6">
                    <label for="fecha_inicio">Fecha de Inicio: </label>
                    <input class="form-control"  type="date" name="fecha_inicio" id="fecha_inicio" value="{{$curso->fecha_inicio}}">
                </div>
                <div class="col-6">
                    <label for="fecha_fin">Fecha de finalizacion: </label>
                    <input class="form-control"  type="date" name="fecha_fin" id="fecha_fin" value="{{$curso->fecha_fin}}">
                </div>
            </div>
            <label for="nombre">Materia: </label>
            <input class="form-control"  type="text" name="nombre" id="nombre" value="{{$curso->nombre}}">
            <label for="descripcion">Objetivo General: </label>
            <textarea class="form-control" name="descripcion" id="descripcion" rows="3">{{$curso->descripcion}}</textarea>
            <label for="grupo">Grupo: </label>
            <input class="form-control" type="text" name="grupo" id="grupo" value="{{$curso->grupo}}">
            <label for="unidades">Unidades: </label>
            <input class="form-control"  type="number" name="unidades" id="unidades" step="1" min="1" max="6" value="{{$curso->unidades}}">
        </div>
    </div>
</div>
<input class="btn btn-primary"  type="submit" value="Editar">
</form>

@endsection
