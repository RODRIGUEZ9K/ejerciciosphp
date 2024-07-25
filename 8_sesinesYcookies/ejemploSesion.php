<?php
session_start();
if(!isset($_SESSION['a'])){
    echo "no existe la sesion A<br>";
    $_SESSION['a'] = 0;
}
if(!isset($_SESSION['b'])){
    echo "no existe la sesion A<br>";
    $_SESSION['b'] = 0;
}
if(isset($_POST['accion']))
{
    switch($_POST['accion']){
        case "incA":
            $_SESSION['a']++;
            break;
        case "decA":
            $_SESSION['a']--;
            break;
        case "incB":
            $_SESSION['b']++;
            break;
        case "decB":
            $_SESSION['b']--;
            break;
        case "cierra":
            session_destroy(); //destruye las variables de sesion
            header("refresh:0"); //refresca la pagina
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    </head>
    <body>
        a = <?= $_SESSION['a'] ?> <br>
        b = <?= $_SESSION['b'] ?> <br>
        <form action="#" method="post">
            <select name="accion">
                <option value="incA">Incrementa a</option>
                <option value="decA">Incrementa a</option>
                <option value="incB">Incrementa a</option>
                <option value="decB">Incrementa a</option>
                <option value="cierra">Cierra sesion</option>
            </select>
            <input type="submit" value="OK">
        </form>
    </body>
</html>