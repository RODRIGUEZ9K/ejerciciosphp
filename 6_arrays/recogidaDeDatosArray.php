<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recogida de Datos</title>
    </head>
    <body>
        <?php
            if(isset($_GET['n'])){
                $n = $_GET['n'];
                $contador_números = $_GET['Contador_números'];
                $numeroTexto = $_GET['número_texto'];
            }
            if(!isset($_GET['n'])){
                $contador_números = 0;
                $numero_Texto = "";
            }
            //Guardar los numeros introducidos
            if($contador_números == 6){
                $numeroTexto = $numeroTexto. " ". $n; //añade el ultimo numero ingresado
                $numeroTexto = substr($numeroTexto, 2); //quita los dos primeros espacios de la cadena
                echo "<hr>";
                echo $numeroTexto;
                echo "<hr>";
                $numero = explode(" ", $numeroTexto);
                echo "<pre>";
                print_r($numero);
                echo "Los números introducidos son: <br>";
                foreach($numero as $n){
                    echo $n, ", ";
                }
            }
            if(($contador_números < 6 ) || (!isset($n))){
        ?>
        <form action="#" method="get">
            Introduzca un número:
            <input type="number" name="n" autofocus>
            <input type="hidden" name="Contador_números" value="<?= ++$contador_números ?>">
            <input type="hidden" name="número_texto" value="<?php if(isset($n)) echo $numeroTexto. " " .$n; else echo $numeroTexto. " ";?>">
            <input type="submit" value="OK">
        </form>
        <?php
            }
        ?>
    </body>
</html>