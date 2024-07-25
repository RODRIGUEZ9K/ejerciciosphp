<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego de la Brisca</title>
</head>
<body>
    <h1>Juego de la Brisca: Selección de 10 Cartas</h1>

    <?php
    $palos = ["oros", "copas", "espadas", "bastos"];
    $cartas = [
        "1" => 11,  
        "2" => 0,
        "3" => 10,  
        "4" => 0,
        "5" => 0,
        "6" => 0,
        "7" => 0,
        "10" => 2,  
        "11" => 3,  
        "12" => 4   
    ];


    $baraja = [];
    foreach ($palos as $palo) {
        foreach ($cartas as $carta => $puntos) {
            $baraja[] = ["palo" => $palo, "carta" => $carta, "puntos" => $puntos];
        }
    }

    shuffle($baraja);
    $mano = array_slice($baraja, 0, 10);

    $puntosTotales = 0;
    foreach ($mano as $carta) {
        $puntosTotales += $carta["puntos"];
    }

    echo "<h2>Cartas Seleccionadas</h2>";
    echo "<ul>";
    foreach ($mano as $carta) {
        echo "<li>{$carta['carta']} de {$carta['palo']} - Puntos: {$carta['puntos']}</li>";
    }
    echo "</ul>";
    echo "<h2>Puntos Totales: $puntosTotales</h2>";
    ?>
</body>
</html>
