<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Bucle</title>
    </head>
    <body>
    <h3>2. Múltiplos de 5 (0-100) con bucle while:</h3>
    <?php
    echo "<h2>Múltiplos de 5 (0-100) con bucle while:</h2>";
    $i = 0;
    while ($i <= 100) {
        echo $i . " ";
        $i += 5;
    }
    ?>

    </body>
</html>