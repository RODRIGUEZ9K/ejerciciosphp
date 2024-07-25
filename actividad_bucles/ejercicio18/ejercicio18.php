<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        if ($num1 != $num2) {
            $menor = min($num1, $num2);
            $mayor = max($num1, $num2);
            echo "<p>Números entre $menor y $mayor, incrementando de 7 en 7:</p>";
            echo "<ul>";
            for ($i = $menor; $i <= $mayor; $i += 7) {
                echo "<li>$i</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Por favor, ingrese dos números distintos.</p>";
        }
    }
?>
