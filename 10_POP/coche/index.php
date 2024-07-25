<?php
    include('coche.class.php');

    $cocheDeLuis = new Coche("Suvaru","93");
    $cocheDeJuanK = new Coche("Toyota","2016");

    $cocheDeLuis->recorre(30);
    $cocheDeLuis->recorre(40);
    $cocheDeLuis->recorre(220);
    $cocheDeJuanK->recorre(60);
    $cocheDeJuanK->recorre(150);
    $cocheDeJuanK->recorre(90);

    echo "El coche de luis ha recorrido ". $cocheDeLuis->getKilometraje()."Km<br>";
    echo "El coche de Juank ha recorrido ". $cocheDeJuanK->getKilometraje()."Km<br>";
    echo "El kilometraje total ha sido de ".Coche::getKilometrajeTotal()."Km";
    
?>