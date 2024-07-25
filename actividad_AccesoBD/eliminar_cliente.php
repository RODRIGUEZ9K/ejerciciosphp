<?php
include 'db.php';
include 'clientes.php';

if (isset($_GET['dni'])) {
    $dni = $_GET['dni'];

    if (isset($_POST['confirmar']) && $_POST['confirmar'] == 'Sí') {
        if (eliminarCliente($dni)) {
            echo "Cliente eliminado exitosamente.";
        } else {
            echo "Error al eliminar el cliente: " . $conexion->error;
        }
    } else {
        echo "<h2>Confirmar eliminación</h2>";
        echo "<form method='post'>";
        echo "<p>¿Estás seguro de que deseas eliminar al cliente con DNI $dni?</p>";
        echo "<input type='submit' name='confirmar' value='Sí'>";
        echo "<input type='submit' name='confirmar' value='No'>";
        echo "</form>";
    }
}
?>

<meta http-equiv="refresh" content="2;url=index.php">
