<?php
$grados = [
    ['grado' => '1ro Grado', 'completado' => false],
    ['grado' => '2do Grado', 'completado' => false],
    ['grado' => '3ro Grado', 'completado' => false],
    ['grado' => '4to Grado', 'completado' => false],
    ['grado' => '5to Grado', 'completado' => false],
    ['grado' => '6to Grado', 'completado' => false],
];

$grados[0]['completado'] = true;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progreso de Registro de Grados</title>
    <link rel="stylesheet" href="styles/progress.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: 50px auto;
            text-align: center;
        }
        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .progress-list {
            list-style: none;
            padding: 0;
        }
        .progress-item {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        .progress-item h2 {
            margin: 0 0 10px;
        }
        .progress-bar {
            width: 100%;
            background-color: #ddd;
            border-radius: 5px;
            overflow: hidden;
        }
        .progress-bar-inner {
            height: 20px;
            background-color: #28a745;
            width: 0%;
            transition: width 1s ease-in-out;
        }
        .completed .progress-bar-inner {
            width: 100%;
        }
        .not-completed .progress-bar-inner {
            background-color: #ffc107;
            width: 20%;
        }
        .progress-item {
            opacity: 0;
            transform: translateY(50px);
        }
        .progress-item.visible {
            opacity: 1;
            transform: translateY(0);
            transition: opacity 0.5s, transform 0.5s;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Progreso de Registro por Grado</h1>
    <ul class="progress-list">
        <?php foreach ($grados as $grado): ?>
            <li class="progress-item <?php echo $grado['completado'] ? 'completed' : 'not-completed'; ?>">
                <h2><?php echo $grado['grado']; ?></h2>
                <div class="progress-bar">
                    <div class="progress-bar-inner"></div>
                </div>
                <?php if ($grado['completado']): ?>
                    <p>Registro completado.</p>
                <?php else: ?>
                    <p>Falta por completar.</p>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const progressItems = document.querySelectorAll('.progress-item');

    progressItems.forEach((item, index) => {
        setTimeout(() => {
            item.classList.add('visible');
        }, index * 200);
        const progressBar = item.querySelector('.progress-bar-inner');
        setTimeout(() => {
            progressBar.style.width = progressBar.parentElement.classList.contains('completed') ? '100%' : '20%';
        }, 400); 
    });
});
</script>
</body>
</html>
