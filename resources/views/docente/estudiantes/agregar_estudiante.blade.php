@extends('plantillas.plantilla_docente')
@section('content')


<div class="card">
    <h5 class="card-header">Estudiante</h5>
    <div class="card-body">

        <div class="form-group">
            <label for="exampleFormControlInput1">Numero de control</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
    </div>
</div>
<a href="/matricular" class="btn btn-primary">Agregar</a>
@endsection
