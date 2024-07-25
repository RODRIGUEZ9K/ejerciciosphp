<?php
    if (isset($_GET['radio']) && isset($_GET['altura'])) {
        $radio = $_GET['radio'];
        $altura = $_GET['altura'];
        if (is_numeric($radio) && $radio > 0 && is_numeric($altura) && $altura > 0) {
            $volumen = (1/3) * pi() * pow($radio, 2) * $altura;

            echo "<h2>Resultado</h2>";
            echo "<p>Radio de la base (r): " . number_format($radio, 2) . " unidades</p>";
            echo "<p>Altura del cono (h): " . number_format($altura, 2) . " unidades</p>";
            echo "<p>Volumen del cono (V): " . number_format($volumen, 2) . " unidades cúbicas</p>";
        } else {
            echo "<p>Por favor, introduce valores numéricos válidos para el radio y la altura.</p>";
        }
    }
    ?>