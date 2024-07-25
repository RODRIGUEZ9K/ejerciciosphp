<?php
    require_once '../Model/Oferta.php'; 

    $data['ofertas'] = Oferta::getOfertas();
    include '../View/listado.php';
?>