<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Bucle</title>
    </head>
    <body>
    <h3>7. Control de acceso a caja fuerte:</h3>
    <?php
    session_start();
    if (!isset($_SESSION['intentos'])) {
        $_SESSION['intentos'] = 0;
    }

    $combinacion_correcta = "1234";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_SESSION['intentos'] < 4) {
            $intento = $_POST['combinacion'] ?? '';
            if (strlen($intento) === 4 && ctype_digit($intento) && $intento === $combinacion_correcta) {
                echo "La caja fuerte se ha abierto satisfactoriamente. <br>";
                session_destroy();
            } else {
                $_SESSION['intentos']++;
                echo "Lo siento, esa no es la combinación. <br> Intento " . $_SESSION['intentos'] . " de 4. <br>";
            }
        }
        
        if ($_SESSION['intentos'] >= 4) {
            echo "Has agotado tus 4 intentos. <br> La caja fuerte está bloqueada. <br>";
            session_destroy();
        }
    }

    if (!isset($_SESSION['intentos']) || $_SESSION['intentos'] < 4) {
        ?>
        <form method="post">
            Introduce la combinación (4 dígitos): <input type="text" name="combinacion" maxlength="4" pattern="\d{4}" required>
            <input type="submit" value="Intentar abrir">
        </form>
        <?php
    }
    ?>
    </body>
</html>