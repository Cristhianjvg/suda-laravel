<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudiantes formulario</title>
</head>
<body>
    <h1>Crear estudiante</h1>
    <section>
        <form action="{{ route('estudiantes-guardar') }}" method="POST">
            @csrf
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
            <br>

            <label for="cedula">Cedula:</label>
            <input type="cedula" id="cedula" name="cedula" required>
            <br>


            {{-- <label for="fecha_nacimiento">Fecha nacimiento: </label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
            <br> --}}

            <button type="submit">Guardar</button>
        </form>
    </section>
</body>
</html>