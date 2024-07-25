<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Bucle</title>
    </head>
    <body>
    <h3>10. Media de numeros positivos:</h3>
    <?php
    session_start();

    if (!isset($_SESSION['suma'])) {
        $_SESSION['suma'] = 0;
        $_SESSION['contador'] = 0;
        $_SESSION['numeros'] = [];
    }

    echo "<h3>Calculadora de media de números positivos</h3>";
    echo "<form method='post' action=''>";
    echo "Introduce un número (negativo para terminar): ";
    echo "<input type='number' name='numero' step='any' autofocus>";
    echo "<input type='submit' value='Añadir'>";
    echo "</form>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = filter_input(INPUT_POST, 'numero', FILTER_VALIDATE_FLOAT);
        if ($numero !== false) {
            if ($numero >= 0) {
                $_SESSION['suma'] += $numero;
                $_SESSION['contador']++;
                $_SESSION['numeros'][] = $numero;
                echo "<p>Número añadido: $numero</p>";
            } else {
                if ($_SESSION['contador'] > 0) {
                    $media = $_SESSION['suma'] / $_SESSION['contador'];
                    echo "<h4>Resultado:</h4>";
                    echo "<p>Números introducidos:</p>";
                    echo "<ul>";
                    foreach ($_SESSION['numeros'] as $num) {
                        echo "<li>$num</li>";
                    }
                    echo "</ul>";
                    echo "<p>Total de números introducidos: {$_SESSION['contador']}</p>";
                    echo "<p>Suma total: {$_SESSION['suma']}</p>";
                    echo "<p>Media: " . number_format($media, 2) . "</p>";
                } else {
                    echo "<p>No se introdujeron números positivos.</p>";
                }
                echo "<a href='?reset=1'>Reiniciar cálculo</a>";
                session_destroy(); 
            }
        } else {
            echo "<p>Por favor, introduce un número válido.</p>";
        }
    }


    if (!empty($_SESSION['numeros'])) {
        echo "<h4>Números introducidos hasta ahora:</h4>";
        echo "<ul>";
        foreach ($_SESSION['numeros'] as $num) {
            echo "<li>$num</li>";
        }
        echo "</ul>";
    }

    if (isset($_GET['reset'])) {
        session_destroy();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
    ?>
    </body>
</html>