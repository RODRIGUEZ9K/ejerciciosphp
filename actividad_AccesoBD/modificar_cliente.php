<?php
include 'db.php';
include 'clientes.php';

if (isset($_GET['dni'])) {
    $dni = $_GET['dni'];

    // Obtiene los datos actuales del cliente
    $query = "SELECT * FROM clientes WHERE dni = '$dni'";
    $result = $conexion->query($query);
    $cliente = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];

        // Actualiza los datos del cliente
        $query = "UPDATE clientes SET nombre = '$nombre', apellido = '$apellido', telefono = '$telefono' WHERE dni = '$dni'";
        if ($conexion->query($query)) {
            echo "Cliente modificado exitosamente.";
        } else {
            echo "Error al modificar el cliente: " . $conexion->error;
        }

        // Redirige al usuario de nuevo a la página principal después de 2 segundos
        echo '<meta http-equiv="refresh" content="2;url=index.php">';
    } else {
        // Muestra el formulario con los datos actuales del cliente
        echo "<h2>Modificar Cliente</h2>";
        echo "<form method='post'>";
        echo "<label>Nombre:</label><br>";
        echo "<input type='text' name='nombre' value='" . $cliente['nombre'] . "' required><br>";
        echo "<label>Apellido:</label><br>";
        echo "<input type='text' name='apellido' value='" . $cliente['apellido'] . "' required><br>";
        echo "<label>Teléfono:</label><br>";
        echo "<input type='text' name='telefono' value='" . $cliente['telefono'] . "'><br>";
        echo "<input type='submit' value='Modificar Cliente'>";
        echo "</form>";
    }
}
?>
