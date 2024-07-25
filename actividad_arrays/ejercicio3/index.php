<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Rotar Array</title>
</head>
<body>
    <h1>Introduce 15 Números</h1>
    <form method="post" action="">
        <?php
        for ($i = 1; $i <= 15; $i++) {
            echo "<label for='numero$i'>Número $i: </label>";
            echo "<input type='number' id='numero$i' name='numero[]' required><br>";
        }
        ?>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['numero'])) {
        $numeros = array_map('intval', $_POST['numero']);

        $ultimo = array_pop($numeros); 
        array_unshift($numeros, $ultimo); 

        echo "<h2>Array Rotado</h2>";
        echo "<ul>";
        foreach ($numeros as $numero) {
            echo "<li>$numero</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
