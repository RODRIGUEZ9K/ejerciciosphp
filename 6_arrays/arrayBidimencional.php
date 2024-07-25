<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $persona = array(
        array(
            "nombre" => "Rosa",
            "estatura" => 168,
            "sexo" => "f"
        ),
        array(
            "nombre" => "Ignacio",
            "estatura" => 175,
            "sexo" => "M"
        ),
        array(
            "nombre" => "Daniel",
            "estatura" => 172,
            "sexo" => "M"
        ),
        array(
            "nombre" => "Ruben",
            "estatura" => 182,
            "sexo" => "M"
        ),
    );
    echo "nombre ", $persona[0]['nombre'], ", estatura ", $persona[0]
    ['estatura'], ",sexo ", $persona[0]['sexo'],".<br>";

    echo "<b>DATOS SOBRE EL PERSONAL</b><br><hr>";
    $numPersonas = count($persona);
    for($i=0; $i < $numPersonas; $i++){
        echo "Nombre: <b>",$persona[$i]['nombre'],"</b><br>";
        echo "Estatura: <b>",$persona[$i]['estatura'],"</b><br>";
        echo "Sexo: <b>",$persona[$i]['sexo'],"</b><br>";

    }


    ?>
</body>
</html>