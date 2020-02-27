@extends('plantilla_docente')
@section('content')
Grupo <select name="grupo" id="grupo">
  <option value="1">S8a - 2193</option>
  <option value="2">S8b - 2193</option>
  <option value="3">S8a - 2201</option>
  <option value="4">S8b - 2201</option>
  <br>
Evidencia: 201<br>
Titulo: titulo de la evidencia<br>
Investigacion:
  <ul>
    <li>Concepto 1</li>
    <li>Concepto 2</li>
  </ul>
Desarrollo:<br>
&#9;Realizar xyz....<br>
  <br>
Equipo <select name="equipo" id="equipo">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
</select>
<table class="table">
  <thead>
    <th>No Control</th>
    <th>Nombre</th>
    <th>Asistencia</th>    
  </thead>
  <tbody>
    <tr>
      <td>96270463</td>
      <td>Fulanito Aguilar López</td>
      <td><input type="checkbox" name="asistencia[96270463]" id="asistencia[96270463]"></td>
    </tr>
    <tr>
      <td>96270463</td>
      <td>Alumno 2</td>
      <td><input type="checkbox" name="asistencia[96270463]" id="asistencia[96270463]"></td>
    </tr>
    <tr>
      <td>96270463</td>
      <td>Alumno 3</td>
      <td><input type="checkbox" name="asistencia[96270463]" id="asistencia[96270463]"></td>
    </tr>
  </tbody>
</table>
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
