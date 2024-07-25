<?php
if (isset($_GET['numero'])) {
    $numero = intval($_GET['numero']);
    $numero_abs = abs($numero);
    $num_digits = strlen((string)$numero_abs);

    echo "<h2>Resultado</h2>";
    echo "<p>El número $numero tiene $num_digits dígito(s).</p>";
}
?>