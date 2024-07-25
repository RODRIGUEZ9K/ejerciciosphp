<?php
if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];
    $cantidadDigitos = strlen((string)abs($numero));
    echo "<h3>Resultado:</h3>";
    echo "El número $numero tiene $cantidadDigitos dígito(s). <br>";
} else {
    echo "<h3>Error:</h3>";
    echo "Por favor, introduce un número en el formulario. <br>";
}
?>
</html>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>9</title>
    </head>
    <body>
        <br>
        <a href="index.php">Regresar</a>
    </body>
</html>