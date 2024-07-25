<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $altura = $_GET['altura'];
        $caracter = $_GET['caracter'];
        if (filter_var($altura, FILTER_VALIDATE_INT) && $altura > 0) {
            echo "<p>Pirámide con altura $altura y carácter '$caracter':</p>";
            for ($i = 1; $i <= $altura; $i++) {
                echo str_repeat("&nbsp;", $altura - $i);
                echo $caracter;
                if ($i > 1 && $i < $altura) {
                    echo str_repeat("&nbsp;", 2 * ($i - 1) - 1);
                    echo $caracter;
                } elseif ($i == $altura) {
                    echo str_repeat($caracter, 1 * $i - 1 +1);
                }
                echo "<br>";
            }
        } else {
            echo "<p>Por favor, ingrese una altura válida (número entero positivo).</p>";
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>20</title>
    </head>
    <body>
        <br>
        <a href="index.php">Regresar</a>
    </body>
</html>