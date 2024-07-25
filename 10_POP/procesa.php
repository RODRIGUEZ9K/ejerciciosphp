<?php
    include("formulario.class.php");
    $miFormulario = new Formulario();
    echo $miFormulario->mostrarFormulario();
    if(isset($_POST['destino'])){
        echo "<pre>";
        print_r($miFormulario->enviarCorreo($_POST['destino'],$_POST['asunto'],$_POST['mensaje'],$_POST['remitente']));
        echo "</pre>";
    }
?>