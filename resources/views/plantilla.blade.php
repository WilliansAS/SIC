<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar">
        <h1>SIC</h1>
        <div class="nav-links">
            <a href="dashboard">Dashboard</a>
            <a href="estudiantes">Lista estudiantes</a>
        </div>
    </nav>
    <header>
        <h1>Bienvenidos</h1>
    </header>
    <main>
        @yield('contenido')
    </main>
    <footer>Todos los derechos reservados</footer>
</body>
</html>