<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>buble</title>
    </head>
    <body>
        <h3>21. Estadísticas de números:</h3>
        <form method="post" action="">
            <label for="numero">Introduce un número (negativo para terminar):</label>
            <input type="number" id="numero" name="numero" required>
            <button type="submit">Enviar</button>
        </form>
        <?php
        session_start();
        if (!isset($_SESSION['contadorNumeros'])) {
            $_SESSION['contadorNumeros'] = 0;
            $_SESSION['sumaImpares'] = 0;
            $_SESSION['contadorImpares'] = 0;
            $_SESSION['mayorPar'] = null;
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $numero = (int)$_POST['numero'];
            if ($numero >= 0) {
                $_SESSION['contadorNumeros']++;
                if ($numero % 2 != 0) {
                    $_SESSION['sumaImpares'] += $numero;
                    $_SESSION['contadorImpares']++;
                } else {
                    if ($_SESSION['mayorPar'] === null || $numero > $_SESSION['mayorPar']) {
                        $_SESSION['mayorPar'] = $numero;
                    }
                }
            } else {
                if ($_SESSION['contadorNumeros'] > 0) {
                    $mediaImpares = $_SESSION['contadorImpares'] > 0 ? $_SESSION['sumaImpares'] / $_SESSION['contadorImpares'] : 0;
                    echo "<p>Números introducidos: {$_SESSION['contadorNumeros']}</p>";
                    echo "<p>Media de los números impares: $mediaImpares</p>";
                    echo "<p>Mayor de los números pares: " . ($_SESSION['mayorPar'] !== null ? $_SESSION['mayorPar'] : "No se introdujeron números pares") . "</p>";
                } else {
                    echo "<p>No se introdujeron números.</p>";
                }
                session_destroy();
            }
        }
        ?>
    </body>
</html>