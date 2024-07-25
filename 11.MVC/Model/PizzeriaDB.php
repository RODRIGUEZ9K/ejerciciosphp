<?php
    abstract class PizzeriaDB{
        private static $server = 'localhost';
        private static $db = 'pizzeria';
        private static $user = "root";
        private static $password = "";
//variables de conectividad

        public static function connectDB(){
            try{
                $connection = new PDO("mysql:host=".self::$server.";dbname=".self::$db, self::$user, self::$password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            } catch (PDOException $e) {
                echo "No se ha podido establecer conexion con el servidor de base de datos.<br>";
                die("Error: ".$e->getMessage());
            }
            return $connection;
        }

    }

?>