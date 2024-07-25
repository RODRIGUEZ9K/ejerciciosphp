<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $pesos = $_GET["pesos"];
        $dolar = 4000; 
        $dolares = $pesos / $dolar;

        echo "<h3>$pesos pesos son equivalentes a $" . number_format($dolares, 2) . " dólares.</h3>";
    }
?>