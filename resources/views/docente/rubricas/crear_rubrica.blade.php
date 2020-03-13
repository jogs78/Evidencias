@extends('plantillas.plantilla_docente')
@section('content')

<div class="card">
    <h5 class="card-header">Tipo</h5>
    <div class="card-body">
        <div class="form-group">
            <input class="form-control"  type="text" name="" id="">
          </div>
    </div>
</div>
<div class="card">
    <h5 class="card-header">Criterios</h5>
    <div class="card-body">
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
@endsection
