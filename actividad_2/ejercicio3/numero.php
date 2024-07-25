<?php
    if(isset($_GET['a']) AND $_GET['a'] != '')
        $numero = $_GET['a'];
    switch($numero){
        case $numero === "1":
            echo "El numero que ingresaste corresponde al dia Lunes.";
            break;
        case $numero === "2":
            echo "El numero que ingresaste corresponde al dia Martes.";
            break;
        case $numero === "3":
            echo "El numero que ingresaste corresponde al dia Miercoles.";
            break;
        case $numero === "4":
            echo "El numero que ingresaste corresponde al dia Jueves.";
            break;
         case $numero === "5":
            echo "El numero que ingresaste corresponde al dia Viernes.";
            break;
        case $numero === "6":
            echo "El numero que ingresaste corresponde al dia Sabado.";
            break;
        case $numero === "7":
            echo "El numero que ingresaste corresponde al dia Domingo.";
            break;
        default:
            echo "Por favor ingrese un numero entre el 1 y el 7.";
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