
<?php
if (isset($_GET['horas'])) {
    $horas = $_GET['horas'];
    if ($horas >= 0) {
        $tarifa_ordinaria = 12; 
        $tarifa_extra = 16; 
        $horas_ordinarias = min(40, $horas);
        $horas_extras = max(0, $horas - 40);
        
        $salario_ordinario = $horas_ordinarias * $tarifa_ordinaria;
        $salario_extra = $horas_extras * $tarifa_extra;
        $salario_total = $salario_ordinario + $salario_extra;

        echo "<h2>Detalle del Salario Semanal</h2>";
        echo "<p>Horas Ordinarias: " . $horas_ordinarias . " horas</p>";
        echo "<p>Horas Extras: " . $horas_extras . " horas</p>";
        echo "<p>Salario por Horas Ordinarias: €" . $salario_ordinario . "</p>";
        echo "<p>Salario por Horas Extras: €" . $salario_extra . "</p>";
        echo "<p>Salario Total: €" . $salario_total . "</p>";
    } else {
        echo "<p>Por favor, introduce un valor numérico válido para las horas trabajadas.</p>";
    }
}
?>