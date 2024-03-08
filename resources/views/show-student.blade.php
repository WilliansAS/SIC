<style>
    body {
    background-color: #F0F4F8;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333333;
    padding: 20px;
}

.container {
    max-width: 600px;
    margin: auto;
    background-color: #FFFFFF;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

h1 {
    color: #00AB84;
    text-align: center;
}

p {
    line-height: 1.6;
}

b {
    color: #007B5F;
    
}

/* Botones y enlaces */
.btn {
    text-decoration: none;
    background-color: #00AB84;
    color: #FFFFFF;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #007B5F;
    color:#FFFFFF;
}


</style>

<div class="container">
    <h1>Información del Estudiante</h1>
    <p>Nombre del estudiante: <b>{{$student->name_student}}</b></p>
    <p>Matrícula del estudiante: <b>{{$student->id_student}}</b></p>
    <!-- Otros detalles del estudiante -->
    <a href="/estudiantes" class="btn">Regresar</a>
</div>

