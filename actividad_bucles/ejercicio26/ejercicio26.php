<?php
    if (isset($_GET['numero']) && isset($_GET['digito'])) {
        $numero = $_GET['numero'];
        $digito = $_GET['digito'];
        $posiciones = [];
        $numeroStr = (string)$numero;
        for ($i = 0; $i < strlen($numeroStr); $i++) {
            if ($numeroStr[$i] == $digito) {
                $posiciones[] = $i + 1;
            }
        }
        if (count($posiciones) > 0) {
            echo "<p>El dígito $digito se encuentra en la(s) posición(es): " . implode(", ", $posiciones) . ".</p>";
        } else {
            echo "<p>El dígito $digito no se encuentra en el número $numero.</p>";
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>26</title>
    </head>
    <body>
        <br>
        <a href="index.php">Regresar</a>
    </body>
</html>