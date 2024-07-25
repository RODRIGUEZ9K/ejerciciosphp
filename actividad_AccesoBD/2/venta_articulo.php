<?php
include 'db.php';
include 'articulos.php';

if (isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cantidad = $_POST['cantidad'];

        if (venderArticulo($codigo, $cantidad)) {
            $articulo = obtenerArticuloPorCodigo($codigo);
            $precio_total = $articulo['precio_venta'] * $cantidad;
            $iva = $precio_total * 0.21;
            $total_con_iva = $precio_total + $iva;

            echo "Venta realizada exitosamente.<br>";
            echo "Factura:<br>";
            echo "Artículo: " . $articulo['descripcion'] . "<br>";
            echo "Cantidad: " . $cantidad . "<br>";
            echo "Precio unitario: " . $articulo['precio_venta'] . "€<br>";
            echo "Precio total (sin IVA): " . $precio_total . "€<br>";
            echo "IVA (21%): " . $iva . "€<br>";
            echo "Total a pagar: " . $total_con_iva . "€<br>";
        } else {
            echo "Error: No hay suficiente stock para realizar la venta.";
        }

        echo '<meta http-equiv="refresh" content="5;url=index.php">';
        exit;
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
    <title>Venta de Artículo</title>
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
    <h2>Venta de Artículo</h2>
    <form method="post">
        <label>Código:</label><br>
        <input type="text" name="codigo" value="<?php echo $codigo; ?>" readonly><br>
        <label>Cantidad:</label><br>
        <input type="text" name="cantidad" required><br>
        <input type="submit" value="Realizar Venta">
    </form>
</body>
</html>
