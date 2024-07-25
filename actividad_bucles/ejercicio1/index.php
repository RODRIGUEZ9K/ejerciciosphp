<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Bucle</title>
    </head>
    <body>
        <h1>Ejercicios de Bucles en PHP </h1>
        <h3>1. Múltiplos de 5 (0-100) con bucle for:</h3>
        <?php
        echo "<h2>Múltiplos de 5 (0-100) con bucle for:</h2>";
        for ($i = 0; $i <= 100; $i += 5) {
            echo $i . " ";
        }
        ?>
    </body>
</html>