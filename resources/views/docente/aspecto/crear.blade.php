@extends('plantillas.plantilla_docente')
@section('content')

<form action="/aspecto" method="post">
    @csrf
    <input type="hidden" name="rubrica_id" id="rubrica_id" value="{{$rid}}">
<div class="card">
    <h5 class="card-header">Titulo</h5>
    <div class="card-body">
        <div class="form-group">
            <input class="form-control"  type="text" name="criterio" id="criterio">
          </div>
    </div>
</div>
<div class="card">
    <h5 class="card-header">Porcentaje</h5>
    <div class="card-body">
        <div class="form-group">
            <input class="form-control"  type="text" name="ponderacion" id="ponderacion">
          </div>
    </div>
</div>
<div class="card">
    <h5 class="card-header">Nivel de aceptacion optimo</h5>
    <div class="card-body">
        <div class="form-group">
            <textarea class="form-control" id="aceptacion_optima" name="aceptacion_optima" rows="3"></textarea>
          </div>
    </div>
</div>

<div class="card">
    <h5 class="card-header">Nivel de aceptacion media</h5>
    <div class="card-body">
        <div class="form-group">
            <textarea class="form-control" id="aceptacion_media" name="aceptacion_media"  rows="3"></textarea>
          </div>
    </div>
</div>

<div class="card">
    <h5 class="card-header">Nivel de no aceptacion</h5>
    <div class="card-body">
        <div class="form-group">
            <textarea class="form-control" id="aceptacion_nula" name="aceptacion_nula"  rows="3"></textarea>
          </div>
    </div>
</div>

<input class="btn btn-primary"  type="submit" value="Crear">
 
</form>
@endsection
