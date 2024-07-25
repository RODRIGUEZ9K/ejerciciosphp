<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controller/grabarOferta.php" enctype="multipart/form-data" method="post"><!-- enctype-> se utiliza para agregar archivos o imagenes -->
        <label for="titulo"> Titulo:
            <input type="text" size="40" name="titulo" required>
        </label><br>
        <label for="imagen"> Imagen:
            <input type="file" id="file" name="imagen" required>
        </label><br>
        <label for="descripcion"> Descripcion: 
            <textarea cols="60" rows="6" name="descripcion" required></textarea>
        </label><br>
        <input type="submit" value="Aceptar">
    </form>
</body>
</html>