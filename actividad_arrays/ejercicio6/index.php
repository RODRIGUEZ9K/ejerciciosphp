<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Números Pares e Impares en Colores</title>
    <style>
        .par {
            color: blue;
            font-weight: bold;
        }
        .impar {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Introduce 8 Números Enteros</h1>
    <form method="post" action="">
        <?php
        for ($i = 1; $i <= 8; $i++) {
            echo "<label for='numero$i'>Número $i: </label>";
            echo "<input type='number' id='numero$i' name='numero[]' required><br>";
        }
        ?>
        <input type="submit" value="Mostrar Números">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['numero'])) {
        $numeros = array_map('intval', $_POST['numero']); 

        echo "<h2>Números Introducidos</h2>";
        echo "<ul>";
        foreach ($numeros as $numero) {
            if ($numero % 2 == 0) {
                echo "<li class='par'>$numero</li>";
            } else {
                echo "<li class='impar'>$numero</li>";
            }
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
