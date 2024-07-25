<?php
function obtenerArticulos() {
    global $conexion;
    $query = "SELECT * FROM articulos";
    return $conexion->query($query);
}

function agregarArticulo($descripcion, $precio_compra, $precio_venta, $stock) {
    global $conexion;
    $query = "INSERT INTO articulos (descripcion, precio_compra, precio_venta, stock) VALUES ('$descripcion', '$precio_compra', '$precio_venta', '$stock')";
    return $conexion->query($query);
}

function modificarArticulo($codigo, $descripcion, $precio_compra, $precio_venta, $stock) {
    global $conexion;
    $query = "UPDATE articulos SET descripcion='$descripcion', precio_compra='$precio_compra', precio_venta='$precio_venta', stock='$stock' WHERE codigo='$codigo'";
    return $conexion->query($query);
}

function eliminarArticulo($codigo) {
    global $conexion;
    $query = "DELETE FROM articulos WHERE codigo='$codigo'";
    return $conexion->query($query);
}

function obtenerArticuloPorCodigo($codigo) {
    global $conexion;
    $query = "SELECT * FROM articulos WHERE codigo='$codigo'";
    return $conexion->query($query)->fetch_assoc();
}

function agregarMercancia($codigo, $cantidad) {
    global $conexion;
    $query = "UPDATE articulos SET stock = stock + '$cantidad' WHERE codigo = '$codigo'";
    return $conexion->query($query);
}

function venderArticulo($codigo, $cantidad) {
    global $conexion;
    $articulo = obtenerArticuloPorCodigo($codigo);
    if ($articulo['stock'] >= $cantidad) {
        $query = "UPDATE articulos SET stock = stock - '$cantidad' WHERE codigo = '$codigo'";
        return $conexion->query($query);
    } else {
        return false;
    }
}
?>
