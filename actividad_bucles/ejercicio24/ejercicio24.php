<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>24</title>
        <style>
            pre {
                font-family: 'Courier New', Courier, monospace;
            }
        </style>
    </head>
    <body>
        <h3>24. Pirámide de números:</h3>
        <?php
        if (isset($_GET['filas'])) {
            $n = (int)$_GET['filas'];
            echo '<pre>';
            for ($i = 1; $i <= $n; $i++) {
                for ($j = $i; $j < $n; $j++) {
                    echo ' ';
                }
                for ($j = 1; $j <= $i; $j++) {
                    echo $j;
                }
                for ($j = $i - 1; $j >= 1; $j--) {
                    echo $j;
                }
                echo "\n";
            }
            echo '</pre>';
        }
        ?>
    </body>
</html>