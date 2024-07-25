<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Diagrama de Barras de Temperaturas Medias</title>
    <style>
        .bar {
            display: inline-block;
            height: 20px;
            margin: 2px 0;
            background-color: blue;
        }
        .label {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>
<body>
    <h1>Introduce la Temperatura Media de Cada Mes</h1>
    <form method="post" action="">
        <?php
        $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        foreach ($meses as $index => $mes) {
            echo "<label for='mes$index'>$mes: </label>";
            echo "<input type='number' id='mes$index' name='temperatura[]' required><br>";
        }
        ?>
        <input type="submit" value="Mostrar Diagrama">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['temperatura'])) {
        $temperaturas = array_map('intval', $_POST['temperatura']);

        echo "<h2>Diagrama de Barras</h2>";
        foreach ($temperaturas as $index => $temp) {
            echo "<div><span class='label'>" . $meses[$index] . ":</span>";
            echo "<div class='bar' style='width: " . ($temp * 10) . "px;'></div> </div>";
        }
    }
    ?>
</body>
</html>
