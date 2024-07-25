<?php
    if (isset($_GET['horas'])) {
        $horas = $_GET['horas'];
        if (($horas) && $horas >= 0) {
            $pago_por_hora = 10000;
            $salario_semanal = $horas * $pago_por_hora;

            echo "<h2>Detalle del Salario Semanal</h2>";
            echo "<p>Horas Trabajadas: " . $horas . "</p>";
            echo "<p>Pago por Hora: $ " . number_format($pago_por_hora, 2) . "</p>";
            echo "<p>Salario Semanal: $ " . number_format($salario_semanal, 2) . "</p>";
        } else {
            echo "<p>Por favor, introduce un número válido de horas trabajadas.</p>";
        }
    }
    ?>