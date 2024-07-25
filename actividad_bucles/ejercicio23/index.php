<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>bucle</title>
    </head>
    <body>
        <h3>23. Suma hasta 10000:</h3>
        <form method="post" action="">
            <label for="numero">Introduce un número:</label>
            <input type="number" id="numero" name="numero" required>
            <button type="submit">Enviar</button>
        </form>
        <?php
        session_start();
        if (!isset($_SESSION['total'])) {
            $_SESSION['total'] = 0;
            $_SESSION['contador'] = 0;
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $numero = (int)$_POST['numero'];

            if ($_SESSION['total'] + $numero > 10000) {
                echo "<p>Total acumulado: {$_SESSION['total']}</p>";
                echo "<p>Números introducidos: {$_SESSION['contador']}</p>";
                echo "<p>Media: " . ($_SESSION['contador'] > 0 ? $_SESSION['total'] / $_SESSION['contador'] : 0) . "</p>";
                session_destroy();
            } else {
                $_SESSION['total'] += $numero;
                $_SESSION['contador']++;
            }
        }
        ?>
    </body>
</html>