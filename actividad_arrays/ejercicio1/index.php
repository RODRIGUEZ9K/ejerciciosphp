<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arrays de Números, Cuadrados y Cubos</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Arrays de Números, Cuadrados y Cubos</h1>

    <?php
    $numero = array();
    $cuadrado = array();
    $cubo = array();
    for ($i = 0; $i < 20; $i++) {
        $numero[$i] = rand(0, 100);
        $cuadrado[$i] = $numero[$i] ** 2;
        $cubo[$i] = $numero[$i] ** 3;
    }
    echo "<table>";
    echo "<tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr>";
    for ($i = 0; $i < 20; $i++) {
        echo "<tr>";
        echo "<td>" . $numero[$i] . "</td>";
        echo "<td>" . $cuadrado[$i] . "</td>";
        echo "<td>" . $cubo[$i] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
