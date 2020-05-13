@extends('plantillas.plantilla_docente')
@section('content')
<br>

<h5 class="card-title">Lista de "{{$activo->nombre}}" del grupo "{{$activo->grupo}}"</h5><br>

<table class="table" border="1" id="lista_matriculas">
    <thead>
        <th>Nombre</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @forelse ($activo->estudiantes as $estudiante)
        <tr id="{{$estudiante->pivot->id}}">
            <td>{{$estudiante->name}}({{$estudiante->email}})</td>
            <td><a id={{$estudiante->pivot->id}} class="btn btn-danger quitar">QUITAR</a></td>
        </tr>
        @empty
            <tr>
                <td colspan="2" >Sin estudiantes matriculados</td>
            </tr>
        @endforelse
     </tbody>
</table>

<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" id="matricular">MATRICULAR</button>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false"  data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">LISTA DE ESTUDIANTES</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
                <form>
                    <div class="row">
                      <div class="col-5">
                        <input type="text" class="form-control" placeholder="Nombre">
                      </div>
                      <div class="col-5">
                        <input type="text" class="form-control" placeholder="Correo">
                      </div>
                      <div class="col-2">
                        <input type="submit" class="form-control btn-primary" value="BUSCAR">
                      </div>
                    </div>
                </form><BR>
                <div class="row">
                  <table class="table" border="1" id="lista_estudiantes">
                    <thead><th>Nombre</th><th>Acciones</th></thead>
                        <tbody>
                            @forelse ($activo->no_matriculados() as $estudiante)
                            <tr id="{{$estudiante->id}}">
                                <td>{{$estudiante->name}}({{$estudiante->email}})</td>
                                <td><a id={{$estudiante->id}} class="btn btn-danger agregar">AGREGAR</a></td>
                             
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="2" >Sin estudiantes a matricular</td>
                                </tr>
                            @endforelse
                        </tbody>
                  </table>  
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
            
          </div>
    </div>
  </div>
</div>
@endsection
@section('codigo')
<script>
$().ready(function(){
    $(".agregar").click(function(event){
        event.preventDefault();
        id = this.id;
        axios.get('/agregar/' + id )
        .then(function (response) {
            linea  ='<tr id=' + response.data.id + '>';
            linea +='<td>' + response.data.nombre + '(' + response.data.correo + ')</td>';
            linea +='<td><a id="' + response.data.id + '" class="btn btn-danger quitar">QUITAR</a></td>';
            linea +='</tr>';
            $('#lista_matriculas  > tbody').append(linea);
            $('#lista_estudiantes > tbody > tr#' + id ).remove();
            console.log(response);
        })
        .catch(function (error) {
            if(error.response.status==401)alert("Usted no ha iniciado en el sistema");
            if(error.response.status==500)alert("Error 500 en el sistema");
            else alert(error.response.data.error);
            console.log(error);
        })   
    });
    $("#lista_matriculas >tbody ").on("click", ".quitar" , function (e){
            e.preventDefault(); 
            id = this.id;
            axios.delete('/quitar/' + id , {
                                                params: {
                                                    _token:  '{{ csrf_token() }}'
                                                }
                                           })
            .then(function (response) {
                $('#lista_matriculas > tbody > tr#' + response.data.id ).remove();
                alert("Se ha modificado la lista de estudiantes, debe cargar de nuevo la página para poder matricular");
                $('#matricular').prop( "disabled", true );
                console.log(response);
            })
            .catch(function (error) {
                if(error.response.status==401)alert("Usted no ha iniciado en el sistema");
                if(error.response.status==404)alert("No se encontro esta matriculación en la base de datos");
                if(error.response.status==500)alert("Error 500 en el sistema");
                else alert(error.response.data.error);
                console.log(error);
            })   

        });
});
</script>
@endsection
