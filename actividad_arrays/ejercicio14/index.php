<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Movimientos del Alfil en Ajedrez</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
            vertical-align: middle;
            font-weight: bold;
            border: 1px solid #000; 
        }
        .white {
            background-color: #f0d9b5;
        }
        .black {
            background-color: #b58863;
        }
        .highlight {
            background-color: #ffcc66; 
        }
    </style>
</head>
<body>
    <h1>Movimientos del Alfil en Ajedrez</h1>

    <?php
    /**
     * Obtiene los movimientos posibles de un alfil desde una posición dada en el tablero.
     * 
     * @param string $posicion La posición inicial del alfil (ej. 'a1').
     * @return array Array con las posiciones válidas a las que el alfil puede moverse.
     */
    function obtenerMovimientosAlfil($posicion) {
        $columnas = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];
        $filas = range(1, 8); 
        $movimientos = []; 

        $columna_actual = strtolower($posicion[0]);
        $fila_actual = intval($posicion[1]);

        for ($i = 1; $i <= 8; $i++) {
            $col = array_search($columna_actual, $columnas) + $i;
            $fil = $fila_actual + $i;
            if ($col >= 0 && $col < 8 && $fil >= 1 && $fil <= 8) {
                $movimientos[] = $columnas[$col] . $fil;
            }

            $col = array_search($columna_actual, $columnas) - $i;
            $fil = $fila_actual + $i;
            if ($col >= 0 && $col < 8 && $fil >= 1 && $fil <= 8) {
                $movimientos[] = $columnas[$col] . $fil;
            }
            $col = array_search($columna_actual, $columnas) + $i;
            $fil = $fila_actual - $i;
            if ($col >= 0 && $col < 8 && $fil >= 1 && $fil <= 8) {
                $movimientos[] = $columnas[$col] . $fil;
            }
            $col = array_search($columna_actual, $columnas) - $i;
            $fil = $fila_actual - $i;
            if ($col >= 0 && $col < 8 && $fil >= 1 && $fil <= 8) {
                $movimientos[] = $columnas[$col] . $fil;
            }
        }

        return $movimientos;
    }

    $posicion_alfil = isset($_POST['posicion']) ? $_POST['posicion'] : 'a1';
    $movimientos = obtenerMovimientosAlfil($posicion_alfil);
    $columnas = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];

    echo "<h2>Posición del Alfil: $posicion_alfil</h2>";
    echo "<table>";

    for ($fila = 8; $fila >= 1; $fila--) {
        echo "<tr>";
        for ($col = 'a'; $col <= 'h'; $col++) {
            $casilla = $col . $fila;
            $color_clase = (($fila + array_search($col, $columnas)) % 2 == 0) ? 'white' : 'black';
            $es_movimiento_valido = in_array($casilla, $movimientos) ? 'highlight' : '';
            echo "<td class='$color_clase $es_movimiento_valido'>$casilla</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <form method="post" action="">
        <label for="posicion">Posición del Alfil (ej. a1, b3, h8):</label>
        <input type="text" id="posicion" name="posicion" value="<?php echo htmlspecialchars($posicion_alfil); ?>" required>
        <input type="submit" value="Mostrar Movimientos">
    </form>

</body>
</html>