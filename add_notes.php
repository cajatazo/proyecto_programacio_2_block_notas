<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Notas</title>
    <link rel="stylesheet" href="styles/add_notas.css">
</head>
<body>
    <fieldset>
        <strong>Agregar Notas del Estudiante</strong>
        <form action="process_notes.php" method="post">
            <label for="nombre_alumno">Nombre del Alumno:</label>
            <input type="text" name="nombre_alumno" required>

            <label for="nota1">Código de Maestro:</label>
            <input type="number" name="nota1" required>

            <label for="seccion_salon">Ingresa el número/sección del Salón</label>
            <input type="text" id="seccion_salon" name="seccion_salon" required>
            <button type="submit"><strong>Ver Notas</strong></button>
        </form>
    </fieldset>
</body>
</html>
