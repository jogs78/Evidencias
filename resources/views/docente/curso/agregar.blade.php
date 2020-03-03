@extends('plantillas.plantilla_docente')
@section('content')
<div class="card">
    <h5 class="card-header">Curso:  </h5>
    <div class="card-body">
        <div class="form-group">
            <input class="form-control"  type="text" name="" id="">
          </div>
    </div>
</div>
<div class="card">
    <h5 class="card-header">Descripcion</h5>
    <div class="card-body">
        <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
    </div>
</div>
<div class="card">
    <h5 class="card-header">Unidades</h5>
    <div class="card-body">
        <ol>
            <li>Rubrica 1 50% - Rubrica 2 50%</li>
            <li>Rubrica 3 40% - Rubrica 4 60%</li>
            <li>Rubrica 3 30% - Rubrica 4 70%</li>
            <li>Rubrica 1 10% - Rubrica 4 90%</li>
        </ol>
        <a href="/agregar_unidad" class="btn btn-success">Agregar unidad</a>


    </div>
</div>
@endsection
