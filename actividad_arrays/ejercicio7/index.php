<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Organizar Números Pares e Impares</title>
</head>
<body>
    <h1>Números Aleatorios</h1>

    <?php
    $numeros = array();
    for ($i = 0; $i < 20; $i++) {
        $numeros[] = rand(0, 100);
    }

    echo "<h2>Números Generados</h2>";
    foreach ($numeros as $numero) {
        echo $numero . " ";
    }

    $pares = array();
    $impares = array();

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares[] = $numero;
        } else {
            $impares[] = $numero;
        }
    }

    $numeros_ordenados = array_merge($pares, $impares);

    echo "<h2>Números Ordenados (Pares e Impares)</h2>";
    foreach ($numeros_ordenados as $numero) {
        echo $numero . " ";
    }
    ?>
</body>
</html>
