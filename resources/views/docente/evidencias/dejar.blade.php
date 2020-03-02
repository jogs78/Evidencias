@extends('plantillas.plantilla_docente')
@section('content')
<br>
<h5 class="card-title">Evidencia ###</h5><br>
<h5 class="card-title">Dejada para el grupo: "s8_ de Enero-Junio de 2020"</h5><br>


<form>
    <div class="form-group">
      <label for="exampleFormControlInput1">Titulo de la evidencia</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Rubrica a usar:</label>
      <select class="form-control" id="exampleFormControlInput1" name="" id="">
          <option value="">Rubrica 1</option>
          <option value="">Rubrica 2</option>
          <option value="">Rubrica 3</option>
          <option value="">Rubrica 4</option>
          <option value="">Rubrica 5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Unidad:</label>
      <select class="form-control" id="exampleFormControlInput1" name="" id="">
          <option value="">1</option>
          <option value="">2</option>
          <option value="">3</option>
          <option value="">4</option>
      </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Investigacion</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Desarrollo</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </form>
@endsection
