<?php
include 'db.php';
include 'clientes.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];

    $query = "SELECT * FROM clientes WHERE dni = '$dni'";
    $result = $conexion->query($query);

    if ($result->num_rows > 0) {
        echo "El cliente con DNI $dni ya existe.";
    } else {
        if (agregarCliente($dni, $nombre, $apellido, $telefono)) {
            echo "Cliente agregado exitosamente.";
        } else {
            echo "Error al agregar el cliente: " . $conexion->error;
        }
    }
}
?>

<meta http-equiv="refresh" content="2;url=index.php">
