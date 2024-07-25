<?php
    include("class.conexion.php");
    $db = new Conexion();
    $db->set_charset("utf8");
    $sql = "SELECT * FROM departamento order by departamento ASC";
    $listado_departamentos = $db->query($sql);
   /* echo "<pre>";
    print_r($listado_departamentos);
    echo "</pre>";*/
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" type="text/css" rel="stylesheet" >
    </head>
    <body>
        <div class="contenedor">
            <div class="formulario">
                <label for="departamentos">Seleccione el Departamento</label>
                <select name="departamentos" id="departamentos">
                    <option value="">--Seleccione--</option>
                    <?php
                        while($row=$listado_departamentos->fetch_array()){
                            echo "<option value='$row[id_departamento]'>$row[departamento]</option>";
                        }
                    ?>
                </select>
                <br>
                <label for="municipios">Seleccione el Municipio</label>
                <select name="municipio" name="municipios">
                </select>
            </div>
        </div>
        <script src="jquery-3.7.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#departamentos').on('change',function(){
                    municipios(this.value);
                })
            });
            function municipios(dep){
                $.ajax({
                    type:"POST",
                    url:"consulta.php",
                    data:{
                        'departamento':dep
                    },
                    success: function(respuesta){
                        $('#municipios').html('');
                        $('#municipios').html(respuesta);
                    }
                });
            }
    </body>
</html>