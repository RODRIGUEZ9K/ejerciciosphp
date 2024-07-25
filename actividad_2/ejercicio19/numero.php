<?php
    if (isset($_GET['numero'])) {
        $numero = intval($_GET['numero']);
        
        if (esCapicua($numero)) {
            echo "<h2>Resultado</h2>";
            echo "<p>El número $numero es capicúa.</p>";
        } else {
            echo "<h2>Resultado</h2>";
            echo "<p>El número $numero no es capicúa.</p>";
        }
    }

    function esCapicua($num) {
        $num_inicial = $num;
        $num_invertido = 0;

        while ($num > 0) {
            $digito = $num % 10;
            $num_invertido = $num_invertido * 10 + $digito;
            $num = (int)($num / 10);
        }

        return $num_invertido === $num_inicial;
    }
    ?>