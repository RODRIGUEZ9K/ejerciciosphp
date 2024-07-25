<?php
if (isset($_GET['horas']) && isset($_GET['minutos'])) {
    $horas = $_GET['horas'];
    $minutos = $_GET['minutos'];

    if (is_numeric($horas) && is_numeric($minutos) && $horas >= 0 && $horas <= 23 && $minutos >= 0 && $minutos <= 59) {
        $segundos_faltantes = (23 - $horas) * 3600 + (59 - $minutos) * 60 + 60;
        echo "<h2>Resultado</h2>";
        echo "<p>Faltan " . number_format($segundos_faltantes) . " segundos para la medianoche.</p>";
    } else {
        echo "<p>Por favor, introduce una hora y minutos válidos.</p>";
    }
}
?>