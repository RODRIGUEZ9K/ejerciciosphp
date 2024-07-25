<?php
    require_once '../Model/Oferta.php';

    move_uploaded_file($_FILES["imagen"]["tmp_name"], "../View/images/".$_FILES['imagen']['name']) ;

    $ofertaAux = new Oferta("", $_POST['titulo'], $_FILES['imagen']['name'], $_POST['descripcion']);
    if($ofertaAux->instert())
        header("Location: index.php");

?>