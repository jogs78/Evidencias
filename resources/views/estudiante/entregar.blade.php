@extends('plantillas.plantilla_estudiante')
@section('content')
@if (\Session::has('success'))
<div class="alert alert-success">
  <p>{{ \Session::get('success') }}</p>
</div><br />
@endif
@if (\Session::has('error'))
<div class="alert alert-danger">
  <p>{{ \Session::get('error') }}</p>
</div><br />
@endif
Titulo: {{$evidencia->titulo}}
<p>Fundamentos:<br>{{$evidencia->fundamentos}}</p> 
<p>Desarrollo:<br>{{$evidencia->desarrollo}}</p> 
<hr>
@if (is_null($asignacion->archivo_entregado))
  <form action="/entregar/{{$evidencia->id}}" method="post" enctype="multipart/form-data">
    @csrf
    Evidencia: <input type="file" name="archivo_entregado" id="archivo_entregado">
    <input type="submit" accept="application/pdf" value="Entregar">
  </form>
@else
  <p>Fecha de entrega:<br>{{$asignacion->cuando_entrego}}</p> 
  @if (!is_null($asignacion->calificacion))
    <p>Calificacion:<br>{{$asignacion->calificacion}}</p>     
  @endif
  @if (!is_null($asignacion->observaciones))
    <p>Observaciones:<br>{{$asignacion->observaciones}}</p>     
  @endif
@endif
@endsection