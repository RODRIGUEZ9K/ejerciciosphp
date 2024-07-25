<?php
if (isset($_GET['a']) && isset($_GET['b'])) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    
    if (is_numeric($a) && is_numeric($b)) {
        if ($a != 0) {
            $x = -$b / $a;
            echo "<h2>Resultado</h2>";
            echo "<p>La solución de la ecuación $a x + $b = 0 es x = " . number_format($x, 2) . "</p>";
        } else {
            if ($b == 0) {
                echo "<h2>Resultado</h2>";
                echo "<p>La ecuación $a x + $b = 0 tiene infinitas soluciones.</p>";
            } else {
                echo "<h2>Resultado</h2>";
                echo "<p>La ecuación $a x + $b = 0 no tiene solución.</p>";
            }
        }
    } else {
        echo "<p>Por favor, introduce valores numéricos válidos para a y b.</p>";
    }
}
?>