<?php
if(isset($_GET['a'], $_GET['b']) AND $_GET['a'] != '' AND $_GET['b'] != ''){
    $a = $_GET['a'];
    $b = $_GET['b'];
    echo "LA suma de $a mas $b es igual: ", $a + $b;
}
?>