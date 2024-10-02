<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Dinámica con PHP - Visualización de Notas</title>
    <link rel="stylesheet" href="styles/style1.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = [
        ['nombre' => 'Leo Zamudio', 'codigo_maestro' => '498', 'seccion_salon' => '4-B', 'nota1' => '15', 'nota2' => '16', 'nota3' => '18'],
        ['nombre' => 'Leo Zamudio', 'codigo_maestro' => '498', 'seccion_salon' => '4-B', 'nota1' => '15', 'nota2' => '16', 'nota3' => '18'],
        ['nombre' => 'Leo Zamudio', 'codigo_maestro' => '498', 'seccion_salon' => '4-B', 'nota1' => '15', 'nota2' => '16', 'nota3' => '18'],
        ['nombre' => 'Leo Zamudio', 'codigo_maestro' => '498', 'seccion_salon' => '4-B', 'nota1' => '15', 'nota2' => '16', 'nota3' => '18'],
        ['nombre' => 'Leo Zamudio', 'codigo_maestro' => '498', 'seccion_salon' => '4-B', 'nota1' => '15', 'nota2' => '16', 'nota3' => '18'],
        ['nombre' => 'Leo Zamudio', 'codigo_maestro' => '498', 'seccion_salon' => '4-B', 'nota1' => '15', 'nota2' => '16', 'nota3' => '18'],
        ['nombre' => 'Leo Zamudio', 'codigo_maestro' => '498', 'seccion_salon' => '4-B', 'nota1' => '15', 'nota2' => '16', 'nota3' => '18'],
        ['nombre' => 'Leo Zamudio', 'codigo_maestro' => '498', 'seccion_salon' => '4-B', 'nota1' => '15', 'nota2' => '16', 'nota3' => '18'],
        ['nombre' => 'Leo Zamudio', 'codigo_maestro' => '498', 'seccion_salon' => '4-B', 'nota1' => '15', 'nota2' => '16', 'nota3' => '18'],
    ];
}

$data = $_SESSION['data'];
?>

<?php
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
    </div>
    <div class="header-right">
        <a href="logout.php" class="logout-button">Cerrar Sesión</a>
        <a href="add_notes.php" class="add-notes-button">Ver otras Notas</a>
    </div>
</header>

<?php
if (isset($_POST['enviar_correo'])) {
    $para = "profesora@ejemplo.com"; 
    $asunto = "Mensaje de alumno";
    $mensaje = $_POST['mensaje'];
    $cabeceras = "From: " . $_POST['correo_alumno'];
    $successMessage = "mensaje enviado";
}
?>
<!-- Contenedor flotante del formulario correo -->
<div id="email-form-container" class="email-form-container">
    <div class="email-form-header">
        <h2>Enviar mensaje a la profesora</h2>
        <button id="minimize-button" class="minimize-button">-</button>
    </div>
    <form method="POST" class="email-form">
        <label for="correo_alumno">Tu correo:</label>
        <input type="email" id="correo_alumno" name="correo_alumno" required placeholder="Tu correo">
        
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="5" required placeholder="Escribe tu mensaje aquí"></textarea>
        
        <button type="submit" name="enviar_correo">Enviar</button>
    </form>
</div>

<script>
// Función para minimizar y expandir el formulario
const minimizeButton = document.getElementById("minimize-button");
const emailFormContainer = document.getElementById("email-form-container");
minimizeButton.addEventListener("click", () => {
    if (emailFormContainer.classList.contains("minimized")) {
        emailFormContainer.classList.remove("minimized");
        minimizeButton.textContent = "-";
    } else {
        emailFormContainer.classList.add("minimized");
        minimizeButton.textContent = "+";
    }
});
</script>

<!-- Visualización de notas -->
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Código de Maestro</th>
            <th>Sección del Salón</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $index => $row): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                <td><?php echo htmlspecialchars($row['codigo_maestro']); ?></td>
                <td><?php echo htmlspecialchars($row['seccion_salon']); ?></td>
                <td><?php echo htmlspecialchars($row['nota1']); ?></td>
                <td><?php echo htmlspecialchars($row['nota2']); ?></td>
                <td><?php echo htmlspecialchars($row['nota3']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
