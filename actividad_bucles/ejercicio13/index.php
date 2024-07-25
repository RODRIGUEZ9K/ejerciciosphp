<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>13</title>
    </head>
    <body>
        <h3>Contar positivos y negativos:</h3>
        <form action="13.php" method="post">
            <label for="numeros">Ingrese diez números separados por comas:</label><br>
            <input type="text" id="numeros" name="numeros" placeholder="Ej. 1, -2, 3, 4, -5, ..." required>
            <br><br>
            <input type="submit" value="Contar">
        </form>
        <br>

        <?php
        // Verificamos si se envió el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtenemos los números ingresados y los separamos por comas
            $input = $_POST['numeros'];
            
            // Convertimos la cadena de entrada en un array de números
            $numeros = explode(",", $input);
            
            // Validamos que haya exactamente diez números
            if (count($numeros) == 10) {
                $positivos = 0;
                $negativos = 0;
                
                // Iteramos sobre cada número para contar positivos y negativos
                foreach ($numeros as $numero) {
                    $numero = trim($numero); // Eliminamos espacios en blanco alrededor del número
                    
                    // Validamos si es positivo, negativo o cero
                    if ($numero > 0) {
                        $positivos++;
                    } elseif ($numero < 0) {
                        $negativos++;
                    }
                }
                
                // Mostramos los resultados
                echo "<p>Resultados:</p>";
                echo "<p>Números positivos: $positivos</p>";
                echo "<p>Números negativos: $negativos</p>";
            } else {
                echo "<p>Por favor, ingrese exactamente diez números separados por comas.</p>";
            }
        }
        ?>
    </body>
</html>