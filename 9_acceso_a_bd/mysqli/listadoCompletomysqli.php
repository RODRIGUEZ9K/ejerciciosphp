<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    $mysqli = new mysqli("localhost","root","","banco");
    if($mysqli->connect_errno){
        echo "Fallo al conectar a MySQL: (". $mysqli->connect_errno . ") ".
        $mysqli->connect_error; 
    } else {
        $mysqli->set_charset("utf8");
        $consulta = $mysqli->query('SELECT dni, nombre, direccion, telefono FROM cliente' );
    }
?>
<h2>Base de datos <u>Banco</u> Listado de clientes</h2>
<table>
    <tr>
        <th><b>DNI</b></th>
        <th><b>Nombre</b></th>
        <th><b>Direccion</b></th>
        <th><b>Telefono</b></th>
    </tr>
    <?php
        /* while($row=mysqli_fetch_array($consulta)){
    ?>
        <tr>
            <td><?= $row['dni'] ?></td>
            <td><?= $row['nombre'] ?></td>
            <td><?= $row['direccion'] ?></td>
            <td><?= $row['telefono'] ?></td>
        </tr>
    <?php
        } */
        while($cliente=$consulta->fetch_object()){
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

</body>
</html>