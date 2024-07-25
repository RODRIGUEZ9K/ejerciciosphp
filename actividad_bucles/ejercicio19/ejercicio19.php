<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $altura = $_GET['altura'];
        $caracter = $_GET['caracter'];
        if (filter_var($altura, FILTER_VALIDATE_INT) && $altura > 0) {
            echo "<p>Pirámide con altura $altura y carácter '$caracter':</p>";
            for ($i = 1; $i <= $altura; $i++) {
                echo str_repeat("&nbsp;", $altura - $i);
                echo str_repeat($caracter, 2 * $i - 1);
                echo "<br>";
            }
        } else {
            echo "<p>Por favor, ingrese una altura válida (número entero positivo).</p>";
        }
    }
?>
