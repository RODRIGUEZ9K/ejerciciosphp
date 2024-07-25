<?php
    $a = new SplFixedArray(10);
    $a[0] = 843;
    $a[2] = 11;
    $a[6] = 1372;

    foreach($a as $elemento){
        echo $elemento;
        echo "<br>";
        var_dump($elemento);
        echo "<br><hr>";
    }

?>