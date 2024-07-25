<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $inicio = $_GET['inicio'];
        if (filter_var($inicio, FILTER_VALIDATE_INT) && $inicio > 0) {
            $suma = 0;
            for ($i = $inicio + 1; $i <= $inicio + 100; $i++) {
                $suma += $i;
            }
            echo "<p>La suma de los 100 números siguientes a $inicio es: $suma</p>";
        } else {
            echo "<p>Por favor, ingrese un número entero positivo.</p>";
        }
    }
?>
