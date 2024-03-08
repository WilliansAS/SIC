<link rel="stylesheet" href="{{ asset('css/lista.css') }}">
@vite('resources/css/app.css')

<nav class="navbar">
    <h1>Lista de estudiantes</h1>
    <div class="nav-links">
        <a href="dashboard">Dashboard</a>
        <a href="formulario">Registrar estudiantes</a>
    </div>
</nav>

@if(session()->has('notificacion'))
    <div>
        {{session('notificacion')}}
    </div>
@endif

<table>
    @foreach ($students as $student)
        <tr>
            <td>{{$student->id_student}}</td>
            <td>{{$student->name_student}}</td>
            <td>{{$student->lastname_student}}</td>
            <td>{{$student->birthday}}</td>
            <td class="botones">
                <a class="detalles" href="{{route('estudiantes.show', $student->id)}}">Detalles</a>
                <a  class="editar" href="{{route('estudiantes.edit', $student->id)}}">Editar</a>
            </td>
        </tr>
    @endforeach
    </table>

{{$students->links()}}