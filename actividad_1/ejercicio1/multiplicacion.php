<?php
if(isset($_GET['a'], $_GET['b']) AND $_GET['a'] != '' AND $_GET['b'] != ''){
    $a = $_GET['a'];
    $b = $_GET['b'];
    echo "La multiplicacion de $a por $b es igual: ", $a * $b;
}
?>