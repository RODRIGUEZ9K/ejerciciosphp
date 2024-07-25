<?php
if (isset($_GET['nota1']) && isset($_GET['nota2']) && isset($_GET['nota3'])) {
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];
    
    if (($nota1) && ($nota2) && ($nota3)) {
        $media = ($nota1 + $nota2 + $nota3) / 3;
        echo "<h2>Resultado</h2>";
        echo "<p>La media de las notas es: " . number_format($media, 2) . "</p>";
    } else {
        echo "<p>Por favor, introduce valores numéricos válidos para las notas.</p>";
    }
}
?>