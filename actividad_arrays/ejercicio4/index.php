<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reemplazar Números en una Lista</title>
    <style>
        .changed {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Números Aleatorios y Reemplazo</h1>

    <?php
    $numeros = array();
    for ($i = 0; $i < 100; $i++) {
        $numeros[] = rand(0, 20);
    }

    echo "<h2>Números Generados</h2>";
    foreach ($numeros as $numero) {
        echo $numero . " ";
    }

    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    ?>
        <h2>Reemplazar Valores</h2>
        <form method="post" action="">
            <label for="valor1">Valor a reemplazar:</label>
            <input type="number" id="valor1" name="valor1" required min="0" max="20"><br>
            <label for="valor2">Nuevo valor:</label>
            <input type="number" id="valor2" name="valor2" required min="0" max="20"><br>
            <input type="submit" value="Reemplazar">
        </form>
    <?php
    } else {
        $valor1 = intval($_POST['valor1']);
        $valor2 = intval($_POST['valor2']);

        echo "<h2>Números Modificados</h2>";
        foreach ($numeros as &$numero) {
            if ($numero == $valor1) {
                echo "<span class='changed'>$valor2</span> ";
            } else {
                echo $numero . " ";
            }
        }
    }
    ?>
</body>
</html>
