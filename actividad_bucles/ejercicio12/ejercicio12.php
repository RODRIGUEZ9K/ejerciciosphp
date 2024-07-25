<?php
    if (isset($_GET['terminos'])) {
        $n = $_GET['terminos'];
        if (filter_var($n, FILTER_VALIDATE_INT) && $n > 0) {
            $a = 0;
            $b = 1;
            echo "Los primeros $n términos de la serie de Fibonacci son:<br>";
            echo "$a, $b";
            for ($i = 3; $i <= $n; $i++) {
                $c = $a + $b;
                echo ", $c";
                $a = $b;
                $b = $c;
            }
        } else {
            echo "Por favor, ingrese un número entero positivo válido.";
        }
    }
?>
