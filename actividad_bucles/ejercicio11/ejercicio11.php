<?php

if (isset($_GET['inicio'])) {
    $inicio = intval($_GET['inicio']);
    echo "<h3>Resultados:</h3><br>";
    echo "<table border='1'>
            <tr>
                <th>Número</th>
                <th>Cuadrado</th>
                <th>Cubo</th>
            </tr>";
    for ($i = $inicio; $i < $inicio + 5; $i++) {
        $cuadrado = $i * $i;
        $cubo = $i * $i * $i;
        echo "<tr>
                <td>$i</td>
                <td>$cuadrado</td>
                <td>$cubo</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>Por favor, introduce un número inicial en el formulario.</p><br>";
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>11</title>
    </head>
    <body>
        <br>
        <a href="index.php">Regresar</a>
    </body>
</html>