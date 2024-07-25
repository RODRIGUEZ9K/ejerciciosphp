<?php
    if(isset($_GET['numero1'], $_GET['numero2']) AND $_GET['numero1'] != '' AND $_GET['numero2'] != '') {
        $numero1 = $_GET["numero1"];
        $numero2 = $_GET["numero2"];

        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        $multiplicacion = $numero1 * $numero2;
        $division = $numero2 != 0 ? $numero1 / $numero2 : "No se puede dividir por cero";

        echo "<h3>Resultados:</h3>";
        echo "<p>Suma: $numero1 + $numero2 = $suma</p>";
        echo "<p>Resta: $numero1 - $numero2 = $resta</p>";
        echo "<p>Multiplicación: $numero1 * $numero2 = $multiplicacion</p>";
        echo "<p>División: $numero1 / $numero2 = $division</p>";
    }
    ?>