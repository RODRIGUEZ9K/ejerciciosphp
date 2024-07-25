<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST["base"];
        $altura = $_POST["altura"];

        $area = 0.5 * $base * $altura;

        echo "<h3>El área del triángulo con base $base y altura $altura es: $area unidades cuadradas.</h3>";
    }
?>