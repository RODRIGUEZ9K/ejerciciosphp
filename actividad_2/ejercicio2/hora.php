<?php
    if (isset($_GET['hora'])) {
        $hora = ($_GET['hora']);

        if ($hora >= 6 && $hora <= 12) {
            echo "<p>Buenos días</p>";
        } elseif ($hora >= 13 && $hora <= 20) {
            echo "<p>Buenas tardes</p>";
        } else {
            echo "<p>Buenas noches</p>";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Primera Clase</title>
    </head>
    <body>
        <br>
        <a href="index.php">Regresar</a>
    </body>
</html>
