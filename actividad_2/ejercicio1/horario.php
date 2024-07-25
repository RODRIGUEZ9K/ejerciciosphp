<?php
    if(isset($_GET['a']) AND $_GET['a'] != '')
        $dia = $_GET['a'];
    switch($dia){
        case $dia === "Lunes":
            echo "La primera hora ven Fisica.";
            break;
        case $dia === "Martes":
            echo "La primera hora ven ingles.";
            break;
        case $dia === "Miecoles":
            echo "La primera hora ven español.";
            break;
        case $dia === "Jueves":
            echo "La primera hora ven sociales.";
            break;
        case $dia === "Viernes":
            echo "La primera hora ven artes.";
            break;
        case $dia === "Sábado":
            echo "No hay clases.";
            break;
        case $dia === "Domingo":
            echo "No hay clases.";
            break;
        default:
            echo "Escribe un dia de la semana correctamente.";
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