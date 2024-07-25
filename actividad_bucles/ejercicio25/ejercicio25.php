<?php
    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];
        $numeroAlReves = strrev((string)$numero);
        echo "<p>El número $numero al revés es $numeroAlReves.</p>";
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>25</title>
    </head>
    <body>
        <br>
        <a href="index.php">Regresar</a>
    </body>
</html>