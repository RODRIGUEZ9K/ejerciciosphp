<?php
    //include 'conexionBD.php';
    try{
        $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8",
        "root","");
    } catch(PDOException $e){
        echo "NO se ha podido establecer conexion con el servidor de bases de datos.<br>";
        die("Error: ".$e->getMessage());
    }
    $consulta = $conexion->query("SELECT dni, nombre, direccion, telefono FROM cliente")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Base de datos <u>Banco</u>Listado de clientes</h2>
    <table border="1">
        <tr>
            <th><b>DNI</b></th>
            <th><b>Nombre</b></th>
            <th><b>Direccion</b></th>
            <th><b>Telefono</b></th>
        </tr>
    <?php
         while($cliente=$consulta->fetchObject()){
    ?>
            <tr>
                <td><?= $cliente-> dni ?></td>
                <td><?= $cliente-> nombre ?></td>
                <td><?= $cliente-> direccion ?></td>
                <td><?= $cliente-> telefono ?></td>
            </tr>
    <?php
         }
    ?>
    </table>
    <br>
    Numero de clientes: <?= $consulta->rowcount() ?> <a href="formularioCliente.php">Nuevo cliente</a>
</body>
</html>