@extends('plantillas.plantilla_docente')
@section('content')

<form action="/rubrica" method="post">
    @csrf
<div class="card">
    <h5 class="card-header">Tipo</h5>
    <div class="card-body">
        <div class="form-group">
            <input class="form-control"  type="text" name="tipo_de" id="tipo_de">
          </div>
    </div>
</div>
<div class="card">
    <h5 class="card-header">Criterios</h5>
    <div class="card-body">
        Los aspectos (creterios), podrá especificarlos al momento de editar la rubrica
    </div>
</div>
<input class="btn btn-primary"  type="submit" value="Crear">
</form>

@endsection
