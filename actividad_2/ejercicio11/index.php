<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Segundos hasta la Medianoche</title>
</head>
<body>
    <h1>Calculadora de Segundos hasta la Medianoche</h1>
    <form method="get" action="calculadora.php">
        <label for="horas">Horas (0-23):</label>
        <input type="text" id="horas" name="horas" required>
        <br>
        <label for="minutos">Minutos (0-59):</label>
        <input type="text" id="minutos" name="minutos" required>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
