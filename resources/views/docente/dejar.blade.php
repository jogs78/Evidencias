@extends('plantilla_docente')
@section('content')
<form>
    <div class="form-group">
      <label for="exampleFormControlInput1">Titulo de la evidencia</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
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
