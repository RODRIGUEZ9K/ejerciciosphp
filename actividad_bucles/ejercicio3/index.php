<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Bucle</title>
    </head>
    <body>
    <h3>3. Múltiplos de 5 (0-100) con bucle do-while:</h3>
    <?php
    echo "<h2>Múltiplos de 5 (0-100) con bucle do-while:</h2>";
    $i = 0;
    do {
        echo $i . " ";
        $i += 5;
    } while ($i <= 100);
    ?>

    </body>
</html>