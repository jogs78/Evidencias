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
        
        @empty
            <tr>
                <td colspan="2" >Sin estudiantes matriculados</td>
            </tr>
        @endforelse
    
        <tr>
            <td>16270158</td>
            <td><a href="/historico">ALBORES JIMENEZ JORGE ALBERTO</a></td>
        </tr>
     </tbody>
</table>
@endsection