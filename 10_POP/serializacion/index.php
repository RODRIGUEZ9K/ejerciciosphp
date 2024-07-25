<?php
session_start();
include_once 'MonstruoDeLasGalletas.class.php';
if (!isset($_SESSION['coco'])){
    $_SESSION['coco'] = serialize(new MonstruoDeLasGalletas());
}
$coco= unserialize($_SESSION['coco']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monstruo come galletas</title>
</head>
<body>
    <?php
    if(isset($_POST['numeroDeGalletas'])){
    $numeroDeGalletas = $_POST['numeroDeGalletas'];
    $coco->come($numeroDeGalletas);
    }
    ?>
    <h2>Soy coco y he comido <?= $coco->getGalletas() ?> galletas</h2>
    <form action="index.php" method="post">
        No. de Galletas <br>
        <input type="number" name="numeroDeGalletas" min="1">
        <input type="submit" value="Comer">
    </form>
    <?php
        $_SESSION['coco'] = serialize($coco);
    ?>
</body>
</html>