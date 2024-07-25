<?php
include 'db.php';
include 'articulos.php';

if (isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];

    if (eliminarArticulo($codigo)) {
        echo "Artículo eliminado exitosamente.";
    } else {
        echo "Error al eliminar el artículo: " . $conexion->error;
    }

    echo '<meta http-equiv="refresh" content="2;url=index.php">';
}
?>
