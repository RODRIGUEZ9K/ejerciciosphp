<?php
    try{
        $conexion = new PDO("mysql:host=localhost","root","");
        echo "se ha establecido una connexion con el servidor de base de datos.<br>";
    } catch (PDOException $e){
        echo "No se ha podido establecer conexion con el servidor de bases de datos.<br>";
        die("Error: ".$e->getMessage());
    }
?>