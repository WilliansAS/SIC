<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<nav class="navbar">
    <h1>SIC</h1>
    <div class="nav-links">
        <a href="/estudiantes">Regresar</a>
    </div>
</nav>

<form action="{{ route('estudiantes.update', $student->id)}}" method="POST" class="container">
    <h3>Editar Estudiante</h3>
    @csrf 
    @method('put')

    <label>Nombre:</label>
    @error('name_student')
    <div style="color:red; font-style: italic;">{{$message}}</div>
    @enderror
    <input type="text" name="name_student" placeholder="Ingresar nombre" value="{{ $student->name_student }}">

    <label>Apellido:</label>
    @error('lastname_student')
    <div style="color:red; font-style: italic;">{{$message}}</div>
    @enderror
    <input type="text" name="lastname_student" placeholder="Ingresar apellido" value="{{ $student->lastname_student }}">

    <label>Matricula:</label>
    @error('id_student')
    <div style="color:red; font-style: italic;">{{$message}}</div>
    @enderror
    <input type="text" name="id_student" placeholder="Ingresar matricula" value="{{ $student->id_student }}">

    <label>Fecha de nacimiento:</label>
    @error('birthday')
    <div style="color:red; font-style: italic;">{{$message}}</div>
    @enderror
    <input type="date" name="birthday" placeholder="Ingresar fecha de nacimiento" value="{{ $student->birthday }}">

    <label>Comentario:</label>
    @error('comments')
    <div style="color:red; font-style: italic;">{{$message}}</div>
    @enderror
    <textarea name="comments" placeholder="Ingresar comentario" value="{{ $student->comments }}"></textarea>

    <button type="submit" class="shadow-drop-center">Editar</button>
</form>