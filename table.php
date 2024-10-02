<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Notas</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php
    $codigo_maestro = $_POST['codigo_maestro'];
    $seccion_salon = $_POST['seccion_salon'];
    $nombre_alumno = $_POST['nombre_alumno'];
    ?>
    <header class="main-header">
        <div class="header-left">
            <ul class="grade-list">
                <li><a href="grado1.php">1ro Grado</a></li>
                <li><a href="grado2.php">2do Grado</a></li>
                <li><a href="grado2.php">3ro Grado</a></li>
                <li><a href="grado2.php">4to Grado</a></li>
                <li><a href="grado2.php">5to Grado</a></li>
                <li><a href="grado2.php">6to Grado</a></li>
            </ul>
        </div>
        <div class="header-center">
            <h1>Bienvenido(a) de vuelta, <?php echo htmlspecialchars($nombre_alumno); ?>...</h1>
            <p>Alumno:<?php echo htmlspecialchars($codigo_maestro); ?></p>
            <p>Sección del Salón: <?php echo htmlspecialchars($seccion_salon); ?></p>
        </div>
        <div class="header-right">
            <a href="logout.php" class="logout-button">Cerrar Sesión</a>
            <a href="add_notes.php" class="add-notes-button">Ver otras Notas</a>
        </div>
    </header>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Código de Alumno</th>
                <th>Primero</th>
                <th>Segundo</th>
                <th>Tercero</th>
                <th>Cuarto</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo htmlspecialchars($nombre_alumno); ?></td>
                <td>12345678</td>
                <td><?php echo htmlspecialchars($codigo_maestro); ?></td>
                <td>8.0</td>
                <td>9.5</td>
                <td>7.8</td>
                <td>10.0</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
