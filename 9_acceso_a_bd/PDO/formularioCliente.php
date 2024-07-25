<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alta de clientes</title>
    </head>
    <body>
        <h1>Base de datos  <u>Banco</u></h1>
        <h2>Alta de clientes</h2>
        <form action="altaCliente.php" method="post">
            Identificación: <input type="text" name="dni" required></br>
            Nombre: <input type="text" name="nombre" required></br>
            Dirección: <input type="text" name="direccion" required></br>
            Teléfono: <input type="text" name="telefono" required></br>
            <input type="submit" value="Enviar"><br>
        </form><br>
        <a href="listadoClientes.php">Regresar</a>
    </body>
</html>