
<?php
    if (isset($_GET['base'])) {
        $base = $_GET['base'];
        if (($base) && $base > 0) {
            $iva = 0.19;
            $importe_iva = $base * $iva;
            $total = $base + $importe_iva;

            echo "<h2>Detalle de la Factura</h2>";
            echo "<p>Base Imponible:" . $base . "</p>";
            echo "<p>IVA (19%):" . $importe_iva. "</p>";
            echo "<p>Total Factura:" . $total . "</p>";
        } else {
            echo "<p>Por favor, introduce un valor numérico válido para la base imponible.</p>";
        }
    }
    ?>