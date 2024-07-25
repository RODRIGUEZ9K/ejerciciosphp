<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Bucle</title>
    </head>
    <body>
    <h3>22. Números primos entre 2 y 100:</h3>
    <?php
    function esPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }
    $primos = [];
    for ($i = 2; $i <= 100; $i++) {
        if (esPrimo($i)) {
            $primos[] = $i;
        }
    }
    echo "<p>Números primos entre 2 y 100: " . implode(", ", $primos) . "</p>";
    ?>
    </body>
</html>