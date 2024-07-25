<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
    $num3 = intval($_GET['num3']);

    $numbers = array($num1, $num2, $num3);

    sort($numbers);

    echo "<h2>Números Ordenados</h2>";
    echo "<p>" . implode(", ", $numbers) . "</p>";
}
?>