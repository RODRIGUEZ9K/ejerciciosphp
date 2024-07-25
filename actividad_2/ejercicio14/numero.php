<?php
if (isset($_GET['numero'])) {
    $numero = intval($_GET['numero']);
    
    echo "<h2>Resultados</h2>";
    if ($numero % 2 == 0) {
        echo "<p>El número $numero es par.</p>";
    } else {
        echo "<p>El número $numero no es par.</p>";
    }

    if ($numero % 5 == 0) {
        echo "<p>El número $numero es divisible entre 5.</p>";
    } else {
        echo "<p>El número $numero no es divisible entre 5.</p>";
    }
}
?>