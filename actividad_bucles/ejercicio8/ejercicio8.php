<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h3>8. Tabla de multiplicar:</h3>
    <form action="8.php" method="get">
        Número: <input type="number" name="numero">
        <input type="submit" value="Ver tabla">
    </form>

    <?php
    if (isset($_GET['numero'])) {
        $numero = intval($_GET['numero']);
        
        echo "<h4>Tabla de multiplicar del $numero:</h4>";
        echo "<table>";
        echo "<tr><th>Multiplicador</th><th>Resultado</th></tr>";
        
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
        }
        
        echo "</table>";
    }
    ?>
    <br>
    <a href="index.php">Regresar</a>
</body>
</html>