@extends('plantillas.plantilla_docente')
@section('content')
<div class="card">
    <h5 class="card-header">Matricular estudiante en el curso de "{{$curso->nombre}}" del grupo "{{$curso->grupo}}"</h5>
    <div class="card-body">
        <div class="form-group">
            <label for="control">Numero de control</label>
            <input type="text" class="form-control" id="control" name="control" placeholder="">
        </div>
    </div>
</div>
<a href="/matricular" class="btn btn-primary">Agregar</a>
@endsection
