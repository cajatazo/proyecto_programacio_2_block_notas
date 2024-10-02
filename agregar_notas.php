<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Notas de Estudiantes</title>
</head>
<body>
    <h1>Agregar Notas de Estudiantes</h1>
    <form action="process_notes.php" method="post">
        <label for="nombre_alumno">Nombre del Estudiante:</label><br>
        <input type="text" id="nombre_alumno" name="nombre_alumno" required><br><br>
        <label for="nota1">Nota 1:</label><br>
        <input type="number" id="nota1" name="nota1" min="0" max="100" required><br><br>
        <label for="nota2">Nota 2:</label><br>
        <input type="number" id="nota2" name="nota2" min="0" max="100" required><br><br>
        <label for="nota3">Nota 3 (opcional):</label><br>
        <input type="number" id="nota3" name="nota3" min="0" max="100"><br><br>
        <input type="submit" value="Guardar Notas">
    </form>
    <br>
    <a href="index.php">Volver a la página principal</a>
</body>
</html>
