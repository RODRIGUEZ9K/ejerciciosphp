<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Números Máximo y Mínimo</title>
</head>
<body>
    <h1>Introducir 10 Números</h1>
    <form method="post" action="">
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo "<label for='numero$i'>Número " . ($i + 1) . ":</label>";
            echo "<input type='number' id='numero$i' name='numero[]' required><br>";
        }
        ?>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['numero'])) {

        $numeros = $_POST['numero'];

        $maximo = max($numeros);
        $minimo = min($numeros);

        echo "<h2>Números Introducidos</h2>";
        echo "<ul>";
        foreach ($numeros as $numero) {
            if ($numero == $maximo) {
                echo "<li>$numero (máximo)</li>";
            } elseif ($numero == $minimo) {
                echo "<li>$numero (mínimo)</li>";
            } else {
                echo "<li>$numero</li>";
            }
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
