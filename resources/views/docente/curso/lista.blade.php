@extends('plantillas.plantilla_docente')
@section('content')
<br>
<h5 class="card-title">Lista de "{{$curso->nombre}}" del grupo "{{$curso->grupo}}"</h5><br>

<table class="table" border="1">
    <thead>
        <th>control</th>
        <th>nombre</th>
    </thead>
    <tbody>
        @forelse ($curso->estudiantes as $estudiante)
        <tr>
            <td></td>
            <td><a href="/historico/{{$estudiante->id}}">{{$estudiante->name}}</a></td>
        </tr>
        @empty
            <tr>
                <td colspan="2" >Sin estudiantes matriculados</td>
            </tr>
        @endforelse
     </tbody>
</table>
@endsection