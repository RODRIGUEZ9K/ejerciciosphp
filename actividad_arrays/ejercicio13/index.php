<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Array Bidimensional con Colores</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        .blue {
            color: blue;
        }
        .green {
            color: green;
        }
    </style>
</head>
<body>
    <h1>Array Bidimensional con Colores</h1>

    <?php
    function generarNumerosUnicos($filas, $columnas, $min, $max) {
        $numeros_usados = [];
        $array = [];

        for ($i = 0; $i < $filas; $i++) {
            $array[$i] = [];
            for ($j = 0; $j < $columnas; $j++) {
                do {
                    $numero = mt_rand($min, $max);
                } while (in_array($numero, $numeros_usados));
                
                $array[$i][$j] = $numero;
                $numeros_usados[] = $numero;
            }
        }

        return $array;
    }

    $array = generarNumerosUnicos(6, 9, 100, 999);

    $minimo = PHP_INT_MAX;
    $min_fila = 0;
    $min_columna = 0;

    for ($i = 0; $i < 6; $i++) {
        for ($j = 0; $j < 9; $j++) {
            if ($array[$i][$j] < $minimo) {
                $minimo = $array[$i][$j];
                $min_fila = $i;
                $min_columna = $j;
            }
        }
    }

    echo "<table>";
    for ($i = 0; $i < 6; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 9; $j++) {
            $numero = $array[$i][$j];
            $clase_css = '';
            
            if ($numero == $minimo) {
                $clase_css = 'blue';
            } elseif ($i == $min_fila || $j == $min_columna || ($i + $j == $min_fila + $min_columna) || ($i - $j == $min_fila - $min_columna)) {
                $clase_css = 'green';
            }

            echo "<td class='$clase_css'>$numero</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>

</body>
</html>
