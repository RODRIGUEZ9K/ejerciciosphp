<?php
// Función para agregar un cliente
function agregarCliente($dni, $nombre, $apellido, $telefono) {
    global $conexion;
    $query = "INSERT INTO clientes (dni, nombre, apellido, telefono) VALUES ('$dni', '$nombre', '$apellido', '$telefono')";
    return $conexion->query($query);
}

// Función para eliminar un cliente
function eliminarCliente($dni) {
    global $conexion;
    $query = "DELETE FROM clientes WHERE dni = '$dni'";
    return $conexion->query($query);
}
?>
