<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $base = $_GET['base'];
        $exponenteMaximo = $_GET['exponente'];
        if (filter_var($base, FILTER_VALIDATE_FLOAT) && filter_var($exponenteMaximo, FILTER_VALIDATE_INT) && $exponenteMaximo > 0) {
            echo "<p>Potencias de $base hasta el exponente $exponenteMaximo:</p>";
            echo "<ul>";
            for ($exponente = 1; $exponente <= $exponenteMaximo; $exponente++) {
                $resultado = 1;
                for ($i = 1; $i <= $exponente; $i++) {
                    $resultado *= $base;
                }
                echo "<li>$base elevado a la $exponente es igual a $resultado</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Por favor, ingrese una base (número real) y un exponente máximo (entero positivo).</p>";
        }
    }
?>
