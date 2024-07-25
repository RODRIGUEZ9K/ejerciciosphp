<?php
if(isset($_GET['nombre']))
    echo "El nombre es: ", $_GET['nombre'];
else
    echo "no llego";
$nombre = $_GET['nombre'] ?? 'nada'; //
echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hola <?= $nombre ?> que tengas un bonito dia.
    <br>
    <a href="../saluda">Regresar</a>
</body>
</html>