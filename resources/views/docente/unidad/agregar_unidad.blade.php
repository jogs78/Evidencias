@extends('plantillas.plantilla_docente')
@section('content')
<h5 class="card-title">UNIDAD #</h5><br>
<h5 class="card-title">Del Curso ________</h5><br>

<div class="card">
    <h5 class="card-header">Descripcion</h5>
    <div class="card-body">
        <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
    </div>
</div>
<div class="card">
    <h5 class="card-header">Temas</h5>
    <div class="card-body">
        <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
    </div>
</div>
<div class="card">
    <h5 class="card-header">Forma de calificar</h5>
    <div class="card-body">

        <table border="1">
            <thead>
                <th>Rubrica</th>
                <th>%</th>
            </thead>
            <tbody>
                <tr>
                    <td>Rubrica 1</td>
                    <td class="text-right">50</td>
                </tr>
                <tr>
                    <td>Rubrica 2</td>
                    <td class="text-right">50</td>
                </tr>
                <tr>
                    <td>Suma</td>
                    <td class="text-right">100</td>
                </tr>
            </tbody>
        </table>

        <small class="form-text text-muted">La sumatoria de los porcentajes debe ser 100.</small>

        <a href="/agregar" class="btn btn-success">Agregar</a>

    </div>
</div>


Rubrica valor


sumatoria
@endsection
