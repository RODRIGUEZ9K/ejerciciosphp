<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Área de Rectángulo</title>
</head>
<body>
    <h1>Calculadora de Área de Rectángulo</h1>
    <form action="calcular_area_rectangulo.php" method="post">
        Base del rectángulo:
        <input type="number" id="base" name="base" required><br><br>
        Altura del rectángulo:
        <input type="number" id="altura" name="altura" required><br><br>
        
        <input type="submit" value="Calcular Área">
    </form>
</body>
</html>
