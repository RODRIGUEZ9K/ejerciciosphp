<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mini Diccionario Español-Inglés</title>
</head>
<body>
    <h1>Mini Diccionario Español-Inglés</h1>

    <?php
    $diccionario = array(
        "casa" => "house",
        "perro" => "dog",
        "gato" => "cat",
        "sol" => "sun",
        "luna" => "moon",
        "libro" => "book",
        "ordenador" => "computer",
        "agua" => "water",
        "azul" => "blue",
        "rojo" => "red",
        "verde" => "green",
        "manzana" => "apple",
        "árbol" => "tree",
        "montaña" => "mountain",
        "playa" => "beach",
        "amigo" => "friend",
        "familia" => "family",
        "música" => "music",
        "ciudad" => "city",
        "trabajo" => "work"
    );

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['palabra'])) {
        $palabra = $_POST['palabra'];

        if (array_key_exists($palabra, $diccionario)) {
            $traduccion = $diccionario[$palabra];
            echo "<p>La traducción de <strong>$palabra</strong> es <strong>$traduccion</strong>.</p>";
        } else {
            echo "<p>No se encontró una traducción para <strong>$palabra</strong>.</p>";
        }
    }
    ?>

    <form method="post" action="">
        <label for="palabra">Introduce una palabra en español:</label>
        <input type="text" id="palabra" name="palabra" required>
        <input type="submit" value="Traducir">
    </form>

</body>
</html>
