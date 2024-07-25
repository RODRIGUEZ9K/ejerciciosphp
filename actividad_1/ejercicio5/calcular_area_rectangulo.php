<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $base = $_POST['base'];
    $altura = $_POST['altura'];
    $area = $base * $altura;
}
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Resultado del Área del Rectángulo</h1>
    
    <?php if (isset($area)): ?>
        <p>Área del rectángulo: <?php echo $area; ?></p>
    <?php endif; ?>
    
</body>
</html>
