<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba de Traducción Español-Inglés</title>
</head>
<body>
    <h1>Prueba de Traducción Español-Inglés</h1>

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

    $palabras_keys = array_keys($diccionario);
    shuffle($palabras_keys);
    $palabras_seleccionadas = array_slice($palabras_keys, 0, 5);

    $respuestas_validas = 0;
    $respuestas_erroneas = 0;

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['respuestas'])) {
        $respuestas = $_POST['respuestas'];

        foreach ($respuestas as $palabra => $respuesta) {
            if (array_key_exists($palabra, $diccionario)) {
                $traduccion_correcta = $diccionario[$palabra];
                if (strtolower(trim($respuesta)) === strtolower(trim($traduccion_correcta))) {
                    $respuestas_validas++;
                } else {
                    $respuestas_erroneas++;
                }
            }
        }

        echo "<h2>Resultados</h2>";
        echo "<p>Respuestas válidas: $respuestas_validas</p>";
        echo "<p>Respuestas erróneas: $respuestas_erroneas</p>";
    }
    ?>

    <form method="post" action="">
        <?php
        foreach ($palabras_seleccionadas as $palabra) {
            echo "<label for='$palabra'>$palabra:</label>";
            echo "<input type='text' id='$palabra' name='respuestas[$palabra]' required><br>";
        }
        ?>
        <br>
        <input type="submit" value="Comprobar Respuestas">
    </form>

</body>
</html>
