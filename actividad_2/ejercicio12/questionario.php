<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $score = 0;

    for ($i = 1; $i <= 10; $i++) {
        if (isset($_POST["q$i"])) {
            $score += intval($_POST["q$i"]);
        }
    }

    echo "<h2>Calificación</h2>";
    echo "<p>Has obtenido $score de 10 puntos.</p>";
}
?>