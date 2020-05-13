@extends('plantillas.plantilla_docente')
@section('content')
<br>

<h5 class="card-title">Lista de "{{$activo->nombre}}" del grupo "{{$activo->grupo}}"</h5><br>
@php
 $hoy = date("Y-m-d");            
@endphp

<div class="alert alert-warning" role="alert">
    <h4 class="alert-heading">Para asignar equipos!</h4>
    <p>Doble click en el número de equipo para modificarlo, presiones escape para cancelar o enter para aceptar.</p>
</div>

<table class="table" border="1" id="lista_matriculas">
    <thead>
        <th>Nombre</th>
        <th>EQUIPO</th>
    </thead>
    <tbody>
        @forelse ($activo->estudiantes as $estudiante)
        <tr>
            <td>{{$estudiante->name}}({{$estudiante->email}})</td>
            <td>  
                    <div id="{{$estudiante->pivot->id}}" class="equipo">
                        {{$estudiante->pivot->equipo}}
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
var mostrando_select = false;
$().ready(function(){
    $(".equipo").dblclick(function(event){
        if(mostrando_select) return;
        mid  = this.id;
        eq_a = this.innerText;
        inp  = '<select class="sequipo" id="' + eq_a + '">';
            for(i=1; i<=15; i++)
                inp += '<option value="' + i + '">' + i + '</option>';    
        inp += '<option value="' + eq_a + '" selected>' + eq_a + '</option>';    
        inp += '</select>';
        this.innerHTML = inp;
        mostrando_select = true;
    });

    $("table#lista_matriculas>tbody").on("keydown",  ".sequipo" , function(event) {
            console.log('presiono: ', event.which);
            event.preventDefault();
            if ( event.which == 13 ) {
                var val = this.value;
                var mid = this.parentElement.id;
                console.log('guardar :', val + " '" + mid + "'");
                axios.put('/agrupar/' + mid , {
                                            _token:  '{{ csrf_token() }}',
                                            equipo: val
                                      })
                .then(function (response) {
                    $("div#" +response.data.id ).text(response.data.equipo);
                    console.log(response);
                })
                .catch(function (error) {
                    if(error.response.status==401)alert("Usted no ha iniciado en el sistema");
                    if(error.response.status==500)alert("Error 500 en el sistema");
                    else alert(error.response.data.error);
                    console.log(error);
                })
                mostrando_select = false;
            }else  if ( event.which == 27 ) {
                this.parentElement.innerText = this.id
                mostrando_select = false;
            }
    });

});
</script>
@endsection
