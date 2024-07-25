<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Rotar Números en un Array</title>
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
        for ($i = 0; $i < 10; $i++) {
            echo "<label for='numero$i'>Número $i: </label>";
            echo "<input type='number' id='numero$i' name='numeros[]' required><br>";
        }
        ?>
        <input type="submit" value="Mostrar Números">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['numeros'])) {
        $numeros = array_map('intval', $_POST['numeros']); 

        echo "<h2>Números Introducidos</h2>";
        echo "<table>";
        echo "<tr><th>Índice</th><th>Número</th></tr>";
        foreach ($numeros as $index => $numero) {
            echo "<tr><td>$index</td><td>$numero</td></tr>";
        }
        echo "</table>";

        echo "<h2>Introduzca las posiciones inicial y final</h2>";
        echo "<form method='post' action=''>";
        echo "<input type='hidden' name='numeros' value='".implode(",", $numeros)."'>";
        echo "<label for='inicial'>Posición Inicial: </label>";
        echo "<input type='number' id='inicial' name='inicial' required min='0' max='9'><br>";
        echo "<label for='final'>Posición Final: </label>";
        echo "<input type='number' id='final' name='final' required min='0' max='9'><br>";
        echo "<input type='submit' value='Rotar Números'>";
        echo "</form>";
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['inicial']) && isset($_POST['final']) && isset($_POST['numeros'])) {
        $numeros = array_map('intval', explode(',', $_POST['numeros']));
        $inicial = intval($_POST['inicial']);
        $final = intval($_POST['final']);

        if ($inicial < $final && $inicial >= 0 && $inicial <= 9 && $final >= 0 && $final <= 9) {
            $numero_inicial = $numeros[$inicial];

            if ($inicial < $final) {
                for ($i = $inicial; $i < $final; $i++) {
                    $numeros[$i] = $numeros[$i + 1];
                }
            } else {
                for ($i = $inicial; $i > $final; $i--) {
                    $numeros[$i] = $numeros[$i - 1];
                }
            }

            $numeros[$final] = $numero_inicial;

            echo "<h2>Array Resultante</h2>";
            echo "<table>";
            echo "<tr><th>Índice</th><th>Número</th></tr>";
            foreach ($numeros as $index => $numero) {
                echo "<tr><td>$index</td><td>$numero</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p style='color:red;'>La posición inicial debe ser menor que la final y ambas deben estar entre 0 y 9.</p>";
        }
    }
    ?>
</body>
</html>
