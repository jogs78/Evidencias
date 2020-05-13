@extends('plantillas.plantilla_docente')
@section('content')
<br>

<h5 class="card-title">Lista de "{{$activo->nombre}}" del grupo "{{$activo->grupo}}"</h5><br>
@php
 $hoy = date("Y-m-d");            
@endphp

<table class="table" border="1" id="lista_matriculas">
    <thead>
        <th>Nombre</th>
        <th>FECHA: <input type="date" name="fecha" id="fecha" value="{{$hoy}}"> </th>
    </thead>
    <tbody>
        @forelse ($activo->estudiantes as $estudiante)
        <tr>
            <td>{{$estudiante->name}}({{$estudiante->email}})</td>
            <td>  
                    <div id="{{$estudiante->pivot->id}}">
                        <input type="button" name="asistencia" class="btn btn-success asistencia" value="ASISTENCIA">
                        <input type="button" name="asistencia" class="btn btn-danger asistencia"  value="FALTA">
                    </div>
            </td>
        </tr>
        @empty
            <tr>
                <td colspan="2" >Sin estudiantes matriculados</td>
            </tr>
        @endforelse
     </tbody>
</table>

@endsection
@section('codigo')
<script>
$().ready(function(){
    $(".asistencia").click(function(event){
        mid = this.parentElement.id;
        tipo = this.value;
        valor = false;
        if (tipo == "ASISTENCIA") valor = true;
        //se pone asistencia a la maticulacion
        axios.post('/asistencia/' + mid , {
                                               
                                                    _token:  '{{ csrf_token() }}',
                                                    fecha: $("#fecha").val(),
                                                    asistencia : valor
                                               
                                           })
        .then(function (response) {
          
            if (response.data.asistencia == true) 
                txt = '<p class="text-success">ASISTENCIA</p>';
            else
                txt = '<p class="text-danger">FALTA</p>';

            $('div#' + response.data.matriculacion ).html(txt);
            console.log(response);
        })
        .catch(function (error) {
            if(error.response.status==401)alert("Usted no ha iniciado en el sistema");
            if(error.response.status==500)alert("Error 500 en el sistema");
            else alert(error.response.data.error);
            console.log(error);
        })   
    });


});
</script>
@endsection
