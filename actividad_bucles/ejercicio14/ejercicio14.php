<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $base = $_GET['base'];
        $exponente = $_GET['exponente'];
        if (filter_var($base, FILTER_VALIDATE_INT) && filter_var($exponente, FILTER_VALIDATE_INT) && $exponente >= 0) {
            $resultado = pow($base, $exponente);
            echo "<p>$base elevado a la $exponente es igual a $resultado.</p>";
        } else {
            echo "<p>Por favor, ingrese un exponente entero positivo.</p>";
        }
    }
?>
