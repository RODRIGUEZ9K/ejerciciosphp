<?php
    $posicion = "arriba";
    switch($posicion){
        case "arriba":
            echo "La variable contiene el valor arriba";
            break;
        case "abajo":
            echo "La variable contiene el valor abajo";
            $suma = 3 + 5;
            echo $suma;
            break;
        default:
            echo "La variable contiene otro valor distinto de arriba y abajo";        
    }
    echo "<br>";
    $a = 8;
    $b = 9;
    switch(true){
        case $a > $b:
            echo "mayor";
            break;
        case $a < $b:
            echo "menor";
            break;
        default:
            echo "igual";            
    }
?>