@extends('plantillas.plantilla_estudiante')
@section('content')
    EVIDENCIAS PRESENTADAS POR EL ESTUDIANTE __________

    <div class="card">
      <div class="card-header">
        (finalizado) Curso xyz
      </div>
      <div class="card-body">
        <a href="/historicoe">HISTORICO</a><br>
        Fecha Incio: __________        Fecha Fin: __________
        Calificacion obtenida : ##
      </div>
    </div>
    
    <div class="card">
      <div class="card-header">
        (en curso) Curso abc 
      </div>
      <div class="card-body">
        <a href="/historicoe">HISTORICO</a><br>
        Fecha Incio: __________        Fecha Fin: __________
        
        <ul>
          <li><a href="/entregar">Evidencia 101</a></li>
          <li><a href="/entregar">Evidencia 102</a></li>
          <li><a href="/entregar">Evidencia 103</a></li>
          <li><a href="/entregar">Evidencia 201</a></li>
          <li><a href="/entregar">Evidencia 202</a></li>
          <li><a href="/entregar">Evidencia 203</a></li>
          <li><a href="/entregar">Evidencia 301</a></li>
          <li><a href="/entregar">Evidencia 302</a></li>
          <li><a href="/entregar">Evidencia 303</a></li>
          <li><a href="/entregar">Evidencia 401</a></li>
          <li><a href="/entregar">Evidencia 402</a></li>
          <li><a href="/entregar">Evidencia 403</a></li>
        </ul>
      </div>
    </div>

@endsection
