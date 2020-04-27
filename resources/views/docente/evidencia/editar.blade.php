@extends('plantillas.plantilla_docente')
@section('content')

<h5 class="card-title">Evidencia para el grupo: "{{$activo->grupo}}" del "{{$activo->_periodo()}}" en la materia "{{$activo->nombre}}"</h5><br>
<br>


  <form action="/evidencia/{{$evidencia->id}}" method="POST">
    @method('PUT')
    @csrf
        <input type="hidden" name="dejado_en" id="dejado_en" value="{{$activo->id}}">
    <label for="titulo">Titulo de la evidencia</label>
    <input type="text" class="form-control" id="titulo"  name="titulo" value="{{$evidencia->titulo}}">
    <label for="rubrica_usada">Rubrica a usar:</label>
    <select class="form-control" name="rubrica_usada" id="rubrica_usada" >
      @foreach ($rubricas as $rubrica)
        <option value="{{$rubrica->id}}" @if ($rubrica->id == $evidencia->rubrica_usada )
            selected
        @endif >{{$rubrica->tipo_de}}</option>
      @endforeach
    </select>
    <label for="unidad">Unidad:</label>
    <input type="number" class="form-control" name="unidad" id="unidad" min="1" max="{{$activo->unidades}}"  value="{{$evidencia->unidad}}">
    <label for="fundamentos">Investigacion</label>
    <textarea class="form-control" id="fundamentos"  name="fundamentos" rows="3">{{$evidencia->fundamentos}}</textarea>
    <label for="desarrollo">Desarrollo</label>
    <textarea class="form-control" id="desarrollo"  name="desarrollo" rows="3">{{$evidencia->desarrollo}}</textarea>
    <input class="btn btn-primary"  type="submit" value="EDITAR">
  </form>
@endsection
