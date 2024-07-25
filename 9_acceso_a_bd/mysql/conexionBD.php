<?php
    $conexion = mysql_connect("localhost","root", "");
    if($conexion){
        echo "se ha establecido con el servidor de base de datos.";
    } else {
        echo "No se ha podido establecer conxion con el servidor de base de datos";
    }


?>
