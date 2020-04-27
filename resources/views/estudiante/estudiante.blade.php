@extends('plantillas.plantilla_estudiante')
@section('content')
  @foreach ($estudiante->cursos_pasados as $pasado)
    <div class="card">
      <div class="card-header">
        {{$pasado->nombre}} - {{$pasado->grupo}}
      </div>
      <div class="card-body">
        Fecha Incio: {{$pasado->fecha_inicio}}        Fecha Fin: {{$pasado->fecha_inicio}}<br>
        Calificacion obtenida : {{$pasado->pivot->calificacion_final}}
      </div>
    </div>
  @endforeach
  @foreach ($estudiante->cursos_actuales as $actual)
  <div class="card">
    <div class="card-header">
      {{$actual->nombre}} - {{$actual->grupo}} 
    </div>
    <div class="card-body">
      <ul>
        @foreach ($actual->evidencias as $evidencia)
         <li><a href="/entregar/{{$evidencia->id}}">{{$evidencia->titulo}}</a></li>          
        @endforeach
       </ul>
    </div>
  </div>
  @endforeach
@endsection
