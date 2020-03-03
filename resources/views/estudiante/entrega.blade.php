@extends('plantillas.plantilla_estudiante')
@section('content')
    EVIDENCIAS PRESENTADAS POR EL ESTUDIANTE __________

    <div class="card">
      <div class="card-header">
        Curso xyz
      </div>
      <div class="card-body">
        Fecha Incio: __________        Fecha Fin: __________
        Calificacion obtenida : ##
      </div>
    </div>
    
    <div class="card">
      <div class="card-header">
        Curso abc (en curso)
      </div>
      <div class="card-body">
        Fecha Incio: __________        Fecha Fin: __________
        <a href="/historico">HISTORICO</a><br>
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


    <hr>
    <table class="table table-sm table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
@endsection