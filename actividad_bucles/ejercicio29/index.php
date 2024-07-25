<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>bucle</title>
    </head>
    <body>
    <h3>29. Números no divisibles:</h3>
        <form action="" method="get">
            Número límite: <input type="number" name="limite">
            Divisor: <input type="number" name="divisor">
            <input type="submit" value="Mostrar">
        </form>
    
        <?php
        if (isset($_GET['limite']) && isset($_GET['divisor'])) {
            $limite = (int)$_GET['limite'];
            $divisor = (int)$_GET['divisor'];
            if ($divisor == 0) {
                echo "<p>El divisor no puede ser cero.</p>";
            } else {
                echo "<p>Números enteros positivos menores a $limite que no son divisibles entre $divisor:</p>";
                echo "<ul>";
                for ($i = 1; $i < $limite; $i++) {
                    if ($i % $divisor != 0) {
                        echo "<li>$i</li>";
                    }
                }
                echo "</ul>";
            }
        }
        ?>
    </body>
</html>