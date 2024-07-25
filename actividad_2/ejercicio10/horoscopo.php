<?php
    if (isset($_GET['dia']) && isset($_GET['mes'])) {
        $dia = $_GET['dia'];
        $mes = $_GET['mes'];
        
        if (is_numeric($dia) && is_numeric($mes) && $dia > 0 && $dia <= 31 && $mes > 0 && $mes <= 12) {
            $horoscopo = '';
            
            switch ($mes) {
                case 1:
                    if ($dia <= 20) {
                        $horoscopo = 'Capricornio';
                    } else {
                        $horoscopo = 'Acuario';
                    }
                    break;
                case 2:
                    if ($dia <= 19) {
                        $horoscopo = 'Acuario';
                    } else {
                        $horoscopo = 'Piscis';
                    }
                    break;
                case 3:
                    if ($dia <= 20) {
                        $horoscopo = 'Piscis';
                    } else {
                        $horoscopo = 'Aries';
                    }
                    break;
                case 4:
                    if ($dia <= 20) {
                        $horoscopo = 'Aries';
                    } else {
                        $horoscopo = 'Tauro';
                    }
                    break;
                case 5:
                    if ($dia <= 21) {
                        $horoscopo = 'Tauro';
                    } else {
                        $horoscopo = 'Géminis';
                    }
                    break;
                case 6:
                    if ($dia <= 21) {
                        $horoscopo = 'Géminis';
                    } else {
                        $horoscopo = 'Cáncer';
                    }
                    break;
                case 7:
                    if ($dia <= 22) {
                        $horoscopo = 'Cáncer';
                    } else {
                        $horoscopo = 'Leo';
                    }
                    break;
                case 8:
                    if ($dia <= 23) {
                        $horoscopo = 'Leo';
                    } else {
                        $horoscopo = 'Virgo';
                    }
                    break;
                case 9:
                    if ($dia <= 23) {
                        $horoscopo = 'Virgo';
                    } else {
                        $horoscopo = 'Libra';
                    }
                    break;
                case 10:
                    if ($dia <= 23) {
                        $horoscopo = 'Libra';
                    } else {
                        $horoscopo = 'Escorpio';
                    }
                    break;
                case 11:
                    if ($dia <= 22) {
                        $horoscopo = 'Escorpio';
                    } else {
                        $horoscopo = 'Sagitario';
                    }
                    break;
                case 12:
                    if ($dia <= 21) {
                        $horoscopo = 'Sagitario';
                    } else {
                        $horoscopo = 'Capricornio';
                    }
                    break;
                default:
                    $horoscopo = 'Fecha no válida';
            }

            echo "<h2>Resultado</h2>";
            echo "<p>Tu horóscopo es: " . $horoscopo . "</p>";
        } else {
            echo "<p>Por favor, introduce un día y mes válidos.</p>";
        }
    }
    ?>