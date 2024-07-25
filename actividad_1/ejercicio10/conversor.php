<?php
    if (isset($_GET['megabytes'])) {
        $megabytes = $_GET['megabytes'];
        if (($megabytes) && $megabytes >= 0) {
            $kilobytes = $megabytes * 1000;

            echo "<h2>Resultado de la Conversión</h2>";
            echo "<p>$megabytes MB son equivalentes a " . $kilobytes . " KB.</p>";
        } else {
            echo "<p>Por favor, introduce un valor numérico válido para los megabytes.</p>";
        }
    }
    ?>