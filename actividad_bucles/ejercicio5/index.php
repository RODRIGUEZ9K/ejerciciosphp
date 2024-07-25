<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Bucle</title>
    </head>
    <body>
    <h3>5. Números del 320 al 160 (de 20 en 20) con bucle while:</h3>
    <?php
    echo "<h2>Números del 320 al 160 (de 20 en 20) con bucle while:</h2>";
    $i = 320;
    while ($i >= 160) {
        echo $i . " ";
        $i -= 20;
    }
    ?>
    </body>
</html>