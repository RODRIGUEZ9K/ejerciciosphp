<?php
    if (isset($_GET['numero'])) {
        $numero = (int)$_GET['numero'];
        function factorial($n) {
            if ($n <= 1) {
                return 1;
            } else {
                return $n * factorial($n - 1);
            }
        }
        $resultado = factorial($numero);
        echo "<p>El factorial de $numero es $resultado.</p>";
    }
    ?>
