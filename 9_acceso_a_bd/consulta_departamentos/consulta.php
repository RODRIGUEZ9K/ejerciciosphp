<?php
    include("class.conexion.php");
    echo "<option value=''>--seleccione--</option>";
    $id_departamento = $_POST['departamento'];
    $db = new Conexion();
    $db->set_charset("utf8");
    $sql="SELECT * FROM municipios WHERE id_departamento = $id_departamento ORDER BY municipio ASC";
    $listado_municipios = $db->query($sql);

    while($row = $listado_municipios->fetch_array()){
        echo "<option value='$row[id_municipio]'>$row[municipio]</option>";
    }
?>