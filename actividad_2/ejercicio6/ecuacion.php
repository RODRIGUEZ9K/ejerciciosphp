<?php
if (isset($_GET['altura'])) {
    $altura = $_GET['altura'];
    if (is_numeric($altura) && $altura >= 0) {
        $g = 9.81;
        $tiempo = sqrt((2 * $altura) / $g);

        echo "<h2>Resultado</h2>";
        echo "<p>La altura desde la que cae el objeto es: " . $altura . " metros</p>";
        echo "<p>El tiempo de caída es: " . $tiempo . " segundos</p>";
    } else {
        echo "<p>Por favor, introduce un valor numérico válido para la altura.</p>";
    }
}
?>