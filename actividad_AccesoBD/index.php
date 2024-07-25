<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Clientes</title>
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
    <h1>Gestión de Clientes</h1>

    <h2>Agregar Cliente</h2>
    <form action="agregar_cliente.php" method="post">
        <label>DNI:</label>
        <input type="text" name="dni" required>
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <label>Apellido:</label>
        <input type="text" name="apellido" required>
        <label>Teléfono:</label>
        <input type="text" name="telefono" required>
        <input type="submit" value="Agregar Cliente">
    </form>

    <h2>Lista de Clientes</h2>
    <table>
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
        <?php
        include 'db.php';

        // Consulta para obtener todos los clientes
        $query = "SELECT * FROM clientes";
        $result = $conexion->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['dni'] . "</td>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['apellido'] . "</td>";
                echo "<td>" . $row['telefono'] . "</td>";
                echo "<td>";
                echo "<a href='modificar_cliente.php?dni=" . $row['dni'] . "'>Modificar</a> | ";
                echo "<a href='eliminar_cliente.php?dni=" . $row['dni'] . "' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este cliente?\");'>Eliminar</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay clientes registrados.</td></tr>";
        }

        $conexion->close();
        ?>
    </table>
</body>
</html>
