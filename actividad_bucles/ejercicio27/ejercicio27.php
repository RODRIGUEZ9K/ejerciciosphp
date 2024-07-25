<?php
    if (isset($_GET['limite'])) {
        $limite = (int)$_GET['limite'];
        $multiples = [];
        $suma = 0;
        for ($i = 1; $i <= $limite; $i++) {
            if ($i % 3 == 0) {
                $multiples[] = $i;
                $suma += $i;
            }
        }
        $cantidad = count($multiples);
        if ($cantidad > 0) {
            echo "<p>Los múltiplos de 3 entre 1 y $limite son: " . implode(", ", $multiples) . ".</p>";
            echo "<p>Número de múltiplos de 3: $cantidad</p>";
            echo "<p>Suma de los múltiplos de 3: $suma</p>";
        } else {
            echo "<p>No hay múltiplos de 3 entre 1 y $limite.</p>";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>27</title>
    </head>
    <body>
        <br>
        <a href="index.php">Regresar</a>
    </body>
</html>