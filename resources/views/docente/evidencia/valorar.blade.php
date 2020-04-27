@extends('plantillas.plantilla_docente')
@section('content')
<br>
<h5 class="card-title">Evidencia ###</h5><br>
<h5 class="card-title">Dejada para el grupo: "s8_ de Enero-Junio de 2020"</h5><br>

<div class="card">
  <div class="card-header">
    Titulo: titulo de la evidencia<br>
  </div>
  <div class="card-body">
    Investigacion:
    <ul>
      <li>Concepto 1</li>
      <li>Concepto 2</li>
    </ul>
  Desarrollo:<br>
  &#9;Realizar xyz....<br>
    <br>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <div class="row">
       <div class="col-6">Fecha: <input type="date" name="" id=""></div>
    </div>
  </div>
  <div class="card-body">
    <table class="table" border="1">
      <thead>
        <th>control</th>
        <th>nombre</th>
        <th>Asistencia </th>
      </thead>
        <tbody>
          <tr>
              <td>16270158</td>
              <td>ALBORES JIMENEZ JORGE ALBERTO</td>
              <td><input type="checkbox" name="" id=""></td>
          </tr>
          <tr>
              <td>15300924</td>
              <td>BARRIOS RODRIGUEZ ISAAC</td>
              <td><input type="checkbox" name="" id=""></td>
          </tr>
          <tr>
              <td>16270740</td>
              <td>BOLAÑOS CAMERAS RAFAEL ANTONIO</td>
              <td><input type="checkbox" name="" id=""></td>
          </tr>
        </tbody>
    </table>
      </div>
</div>



Calificaiones<br>
<div class="row">
  <div class="col-1">
    Rubro 1
  </div>
  <div class="col-11">
    <select name="equipo" id="equipo">
      <option value="1">Bueno</option>
      <option value="2">Medio</option>
      <option value="3">Malo</option>
    </select>
  </div>
</div>
<div class="row">
  <div class="col-1">
    Rubro 2
  </div>
  <div class="col">
    <select name="equipo" id="equipo">
      <option value="1">Bueno</option>
      <option value="2">Medio</option>
      <option value="3">Malo</option>
    </select>
  </div>
</div>
<div class="row">
  <div class="col-1">
    Rubro 3
  </div>
  <div class="col">
    <select name="equipo" id="equipo">
      <option value="1">Bueno</option>
      <option value="2">Medio</option>
      <option value="3">Malo</option>
    </select>
  </div>
</div>
<div class="row">
  <div class="col-1">
    Rubro 4
  </div>
  <div class="col">
    <select name="equipo" id="equipo">
      <option value="1">Bueno</option>
      <option value="2">Medio</option>
      <option value="3">Malo</option>
    </select>
  </div>
</div>
<div class="row">
  <div class="col-1">
    Rubro 5
  </div>
  <div class="col">
    <select name="equipo" id="equipo">
      <option value="1">Bueno</option>
      <option value="2">Medio</option>
      <option value="3">Malo</option>
    </select>
  </div>
</div>
<div class="row">
  <div class="col-1">
    
  </div>
  <div class="col">
    <input type="number " name="calificacion" id="calificacion" size="2" >
  </div>
</div>
<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Observaciones"></textarea>
@endsection
