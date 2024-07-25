<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el numero</title>
</head>
<body>
    Adivina el numer que estoy pensando
    <form action="adivina.php" method="post">
        <input type="hidden" name="numeroIntroducido" value="20">
        <input type="hidden" name="oportunidades" value="5">
        <input type="submit" value="Continuar">
    </form>    
</body>
</html>