<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Bucle</title>
    </head>
    <body>
    <h3>6. Números del 320 al 160 (de 20 en 20) con bucle do-while:</h3>
    <?php
    echo "<h2>Números del 320 al 160 (de 20 en 20) con bucle do-while:</h2>";
    $i = 320;
    do {
        echo $i . " ";
        $i -= 20;
    } while ($i >= 160);
    ?>
    </body>
</html>