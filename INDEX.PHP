<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de Información</title>
    <link rel="stylesheet" href="styles/style.css">
    <script>
        function validarUsuario(event) {

            event.preventDefault();
            
            const codigo = document.getElementById("codigo_maestro").value;
            const seccion = document.getElementById("seccion_salon").value;
            const nombre = document.getElementById("nombre_alumno").value.toUpperCase().trim();

            const codigoCorrecto = "498";
            const seccionCorrecta = "4-B";
            const nombreCorrecto = "CAMPOMANES ZAMUDIO JESUS";

            if (codigo === codigoCorrecto && seccion === seccionCorrecta && nombre === nombreCorrecto) {

                document.querySelector("form").submit();
            } else {

                alert("USTED NO ESTÁ REGISTRADO");
            }
        }
    </script>
</head>
<body>
    <form action="table.php" method="POST" class="form-container" onsubmit="validarUsuario(event)">
        <label for="codigo_maestro">Ingresa Tu código de Alumno</label>
        <input type="text" id="codigo_maestro" name="codigo_maestro" required>

        <label for="seccion_salon">Ingresa el número/sección del Salón</label>
        <input type="text" id="seccion_salon" name="seccion_salon" required>

        <label for="nombre_alumno">Ingresa el nombre del Alumno(a)</label>
        <input type="text" id="nombre_alumno" name="nombre_alumno" required>

        <button type="submit"><strong>Iniciar sesión</strong></button>
    </form>
</body>
</html>
