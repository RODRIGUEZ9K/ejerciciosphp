<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Organizar Números Primos y No Primos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Introduce 10 Números</h1>
    <form method="post" action="">
        <?php
        // Generar campos de entrada para los 10 números
        for ($i = 1; $i <= 10; $i++) {
            echo "<label for='numero$i'>Número $i: </label>";
            echo "<input type='number' id='numero$i' name='numero[]' required><br>";
        }
        ?>
        <input type="submit" value="Mostrar Números">
    </form>

    <?php
    // Función para determinar si un número es primo
    function esPrimo($num) {
        if ($num < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['numero'])) {
        $numeros = array_map('intval', $_POST['numero']); // Convertir los valores a enteros

        // Mostrar los números generados junto con sus índices
        echo "<h2>Números Introducidos</h2>";
        echo "<table>";
        echo "<tr><th>Índice</th><th>Número</th></tr>";
        foreach ($numeros as $index => $numero) {
            echo "<tr><td>$index</td><td>$numero</td></tr>";
        }
        echo "</table>";

        // Separar los números primos y no primos
        $primos = array();
        $noPrimos = array();

        foreach ($numeros as $numero) {
            if (esPrimo($numero)) {
                $primos[] = $numero;
            } else {
                $noPrimos[] = $numero;
            }
        }

        // Combinar los primos y no primos
        $numeros_ordenados = array_merge($primos, $noPrimos);

        // Mostrar los números ordenados junto con sus índices
        echo "<h2>Números Ordenados (Primos y No Primos)</h2>";
        echo "<table>";
        echo "<tr><th>Índice</th><th>Número</th></tr>";
        foreach ($numeros_ordenados as $index => $numero) {
            echo "<tr><td>$index</td><td>$numero</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
