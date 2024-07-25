<?php
    if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];

        if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
            if ($a == 0) {
                echo "<p>El valor de 'a' no puede ser cero en una ecuación de segundo grado.</p>";
            } else {
                $discriminante = ($b * $b) - (4 * $a * $c);
                if ($discriminante > 0) {
                    $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
                    $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
                    echo "<h2>Resultado</h2>";
                    echo "<p>La ecuación tiene dos soluciones reales:</p>";
                    echo "<p>x1 = " . number_format($x1, 2) . "</p>";
                    echo "<p>x2 = " . number_format($x2, 2) . "</p>";
                } elseif ($discriminante == 0) {
                    $x = -$b / (2 * $a);
                    echo "<h2>Resultado</h2>";
                    echo "<p>La ecuación tiene una solución real:</p>";
                    echo "<p>x = " . number_format($x, 2) . "</p>";
                } else {
                    echo "<h2>Resultado</h2>";
                    echo "<p>La ecuación no tiene soluciones reales.</p>";
                }
            }
        } else {
            echo "<p>Por favor, introduce valores numéricos válidos para a, b y c.</p>";
        }
    }
    ?>