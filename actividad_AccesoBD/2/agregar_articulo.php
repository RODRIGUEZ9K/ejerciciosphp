<?php
include 'db.php';
include 'articulos.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $descripcion = $_POST['descripcion'];
    $precio_compra = $_POST['precio_compra'];
    $precio_venta = $_POST['precio_venta'];
    $stock = $_POST['stock'];

    if (agregarArticulo($descripcion, $precio_compra, $precio_venta, $stock)) {
        echo "Artículo agregado exitosamente.";
    } else {
        echo "Error al agregar el artículo: " . $conexion->error;
    }

    echo '<meta http-equiv="refresh" content="2;url=index.php">';
}
?>
