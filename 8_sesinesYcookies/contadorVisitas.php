<?php
session_start(); //activamos el inicio de sesiones
if(isset($_SESSION['visitas']))
    $_SESSION['visitas']++;
else   
    $_SESSION['visitas'] = 1;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    </head>
    <body>
        <?php
            echo "visitas: ".$_SESSION['visitas'];
        ?>
    </body>
</html>