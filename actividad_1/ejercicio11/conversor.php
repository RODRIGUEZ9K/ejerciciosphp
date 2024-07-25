<?php
if (isset($_GET['kilobytes'])) {
    $kilobytes = $_GET['kilobytes'];
    if (($kilobytes) && $kilobytes >= 0) {
        $megabytes = $kilobytes / 1000;

        echo "<h2>Resultado de la Conversión</h2>";
        echo "<p>$kilobytes KB son equivalentes a " . $megabytes . " MB.</p>";
    } else {
        echo "<p>Por favor, introduce un valor numérico válido para los kilobytes.</p>";
    }
}
?>