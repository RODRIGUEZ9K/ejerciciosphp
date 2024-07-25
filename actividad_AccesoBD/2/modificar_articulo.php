<?php
include 'db.php';
include 'articulos.php';

if (isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];

    $articulo = obtenerArticuloPorCodigo($codigo);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $descripcion = $_POST['descripcion'];
        $precio_compra = $_POST['precio_compra'];
        $precio_venta = $_POST['precio_venta'];
        $stock = $_POST['stock'];

        if (modificarArticulo($codigo, $descripcion, $precio_compra, $precio_venta, $stock)) {
            echo "Artículo modificado exitosamente.";
            echo '<meta http-equiv="refresh" content="2;url=index.php">';
            exit;
        } else {
            echo "Error al modificar el artículo: " . $conexion->error;
        }
    }
} else {
    echo "No se proporcionó un código válido.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Artículo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        h1, h2 {
            color: #333;
        }
        form {
            width: 50%;
            margin: 20px 0;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #fff;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type=text] {
            width: calc(100% - 20px);
            padding: 5px 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Modificar Artículo</h2>
    <form method="post">
        <label>Código:</label><br>
        <input type="text" name="codigo" value="<?php echo $articulo['codigo']; ?>" readonly><br>
        <label>Descripción:</label><br>
        <input type="text" name="descripcion" value="<?php echo $articulo['descripcion']; ?>" required><br>
        <label>Precio de Compra:</label><br>
        <input type="text" name="precio_compra" value="<?php echo $articulo['precio_compra']; ?>" required><br>
        <label>Precio de Venta:</label><br>
        <input type="text" name="precio_venta" value="<?php echo $articulo['precio_venta']; ?>" required><br>
        <label>Stock:</label><br>
        <input type="text" name="stock" value="<?php echo $articulo['stock']; ?>" required><br>
        <input type="submit" value="Modificar Artículo">
    </form>
</body>
</html>
