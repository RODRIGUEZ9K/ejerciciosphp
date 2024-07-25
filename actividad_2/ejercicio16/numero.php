<?php
if (isset($_GET['numero'])) {
    $numero = intval($_GET['numero']);
    $ultimaCifra = abs($numero) % 10; // abs() para asegurar que la cifra es positiva
    
    echo "<h2>Resultado</h2>";
    echo "<p>La última cifra del número $numero es $ultimaCifra.</p>";
}
?>