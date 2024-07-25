<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Ofertas - Pizzeria ADSO</title>
</head>
<body>
    <h1>Pizzeria ADSO</h1>
    <a href="../Controller/nuevaOferta.php">Agregar Nueva Oferta</a>
    <hr>
    <?php
        foreach($data['ofertas'] as $oferta){
    ?>
        <h3><?= $oferta->getTitulo() ?></h3>
        <img src="../View/images/<?= $oferta->getImagen() ?>" width="400"><br>
        <p><?= $oferta->getDescripcion() ?></p><br>
        <a href="../Controller/borrarOferta.php?id=<?= $oferta->getId() ?>">Borrar Oferta</a>
    <?php
        }
    ?>
</body>
</html>