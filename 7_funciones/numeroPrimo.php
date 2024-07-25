<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Numero Primo</title>
    </head>
    <body>
        <?php
            include 'matematicas.php';
            if(isset($_POST['numero']))
            $numero = $_POST['numero'];
            if(!isset($numero)){
        ?>
        Introduzca un número para saber si es primo o no.
        <form action="#" method="post">
            <input type="number" name="numero" min="0" autofocus> <br>
            <input type="submit" value="Aceptar">
        </form>
        <?php
            } else {
                if(esPrimo($numero))
                    echo "El $numero es un número Primo.";
                else
                    echo "El $numero no es un número Primo";
                echo "<br> <a href='numeroPrimo.php'>Recargar Pagina</a>";
            }
        ?>
    </body>
</html>