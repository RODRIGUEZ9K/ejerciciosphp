<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>GESTISIMAL - Gestión Simplificada de Almacén</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: #333;
        }
        a:hover {
            text-decoration: underline;
        }
        form {
            margin-bottom: 20px;
        }
        input[type=text], input[type=submit] {
            padding: 10px;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>GESTISIMAL - Gestión Simplificada de Almacén</h1>

    <h2>Agregar Artículo</h2>
    <form action="agregar_articulo.php" method="post">
        <label>Descripción:</label>
        <input type="text" name="descripcion" required>
        <label>Precio de Compra:</label>
        <input type="text" name="precio_compra" required>
        <label>Precio de Venta:</label>
        <input type="text" name="precio_venta" required>
        <label>Stock:</label>
        <input type="text" name="stock" required>
        <input type="submit" value="Agregar Artículo">
    </form>

    <h2>Lista de Artículos</h2>
    <table>
        <tr>
            <th>Código</th>
            <th>Descripción</th>
            <th>Precio de Compra</th>
            <th>Precio de Venta</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
        <?php
        include 'db.php';
        include 'articulos.php';

        $result = obtenerArticulos();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['codigo'] . "</td>";
                echo "<td>" . $row['descripcion'] . "</td>";
                echo "<td>" . $row['precio_compra'] . "</td>";
                echo "<td>" . $row['precio_venta'] . "</td>";
                echo "<td>" . $row['stock'] . "</td>";
                echo "<td>";
                echo "<a href='modificar_articulo.php?codigo=" . $row['codigo'] . "'>Modificar</a> | ";
                echo "<a href='eliminar_articulo.php?codigo=" . $row['codigo'] . "' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este artículo?\");'>Eliminar</a> | ";
                echo "<a href='entrada_mercancia.php?codigo=" . $row['codigo'] . "'>Entrada de Mercancía</a> | ";
                echo "<a href='venta_articulo.php?codigo=" . $row['codigo'] . "'>Venta</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No hay artículos registrados.</td></tr>";
        }

        $conexion->close();
        ?>
    </table>
</body>
</html>
