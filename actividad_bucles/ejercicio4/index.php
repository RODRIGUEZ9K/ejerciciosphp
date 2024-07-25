<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Bucle</title>
    </head>
    <body>
    <h3>4. Números del 320 al 160 (de 20 en 20) con bucle for:</h3>
    <?php
    echo "<h2>Números del 320 al 160 (de 20 en 20) con bucle for:</h2>";
    for ($i = 320; $i >= 160; $i -= 20) {
        echo $i . " ";
    }
    ?>
    </body>
</html>