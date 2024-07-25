<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $numero = $_GET['numero'];
        if (filter_var($numero, FILTER_VALIDATE_INT) && $numero > 1) {
            function esPrimo($num) {
                if ($num <= 1) {
                    return false;
                }
                for ($i = 2; $i * $i <= $num; $i++) {
                    if ($num % $i == 0) {
                        return false;
                    }
                }
                return true;
            }
            if (esPrimo($numero)) {
                echo "<p>El número $numero es primo.</p>";
            } else {
                echo "<p>El número $numero no es primo.</p>";
            }
        } else {
            echo "<p>Por favor, ingrese un número entero mayor que 1.</p>";
        }
    }
?>
