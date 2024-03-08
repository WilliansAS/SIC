<style>
    /* Establece los estilos generales del cuerpo de la página */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: auto;
    background-color: #f0f4f8;
    color: #333333;
}

/* Estiliza el contenedor principal para centrar el contenido */
.container {
    max-width: 800px;
    margin: 35px auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Estiliza los encabezados */
.heading {
    color: #00AB84;
    text-align: center;
    padding: 10px 0;
}

/* Estiliza las unidades y la asignatura */
.units, .subject {
    background-color: #ffffff;
    padding: 15px;
    margin: 10px 0;
    border: 1px solid #00AB84;
    border-radius: 5px;
}

/* Opcional: añade interactividad a los elementos */
.units:hover, .subject:hover {
    background-color: #e6fffa;
    cursor: pointer;
    transition: background-color 0.3s;
}

</style>

<body>
    <div class="container">
        <h1 class="heading">Lista de Unidades</h1>
        @foreach($units as $unit)
        <div class="units">
            <p>Unidad: <strong>{{ $unit->unit_name }}</strong></p>
        </div>
         @endforeach

        <h1 class="heading">Nombre de la asignatura</h1>
        @foreach ($subject as $subject)
        @endforeach
        <div class="subject">{{ $subject->subject_name }}</div>
    </div>
</body>
