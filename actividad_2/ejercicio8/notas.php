<?php
if (isset($_GET['nota1']) && isset($_GET['nota2']) && isset($_GET['nota3'])) {
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];
    
    if (($nota1) && ($nota2) && ($nota3)) {
        $media = ($nota1 + $nota2 + $nota3) / 3;
        echo "<h2>Resultado</h2>";
        echo "<p>La media de las notas es: " . $media . "</p>";
        
        if ($media < 20) {
            echo "<p>Nota del boletín: Insuficiente</p>";
        } elseif ($media >= 21 && $media < 30) {
            echo "<p>Nota del boletín: Suficiente</p>";
        } elseif ($media >= 31 && $media <40 ) {
            echo "<p>Nota del boletín: Bien</p>";
        } elseif ($media >= 41 && $media < 50) {
            echo "<p>Nota del boletín: Notable</p>";
        } else {
            echo "<p>Nota del boletín: Sobresaliente</p>";
        }
    } else {
        echo "<p>Por favor, introduce valores numéricos válidos para las notas.</p>";
    }
}
?>