<?php
if (isset($_GET['numero'])) {
    $numero = intval($_GET['numero']);
    $primeraCifra = abs($numero);
    
    while ($primeraCifra >= 10) {
        $primeraCifra = floor($primeraCifra / 10);
    }

    echo "<h2>Resultado</h2>";
    echo "<p>La primera cifra del número $numero es $primeraCifra.</p>";
}
?>