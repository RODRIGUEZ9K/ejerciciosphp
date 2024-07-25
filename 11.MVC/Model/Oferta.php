<?php
    require_once 'PizzeriaDB.php';

    class Oferta{
        private $id;
        private $titulo;
        private $imagen;
        private $descripcion;

        function __construct($id, $titulo=NULL, $imagen=NULL, $descripcion=NULL){
            $this->id = $id;
            $this->titulo = $titulo;
            $this->imagen = $imagen;
            $this->descripcion = $descripcion;
        }
        public function getId(){
            return $this->id;
        }
        public function getTitulo(){
            return $this->titulo;
        }
        public function getImagen(){
            return $this->imagen;
        }
        public function getDescripcion(){
            return $this->descripcion;
        }
        public static function getOfertas(){
            $conexion = PizzeriaDB::connectDB();
            $sql = "SELECT * FROM oferta";
            $consulta = $conexion->query($sql);
            $ofertas= [];
            while($oferta = $consulta->fetchObject()){
                $ofertas[] = new Oferta($oferta->id, $oferta->titulo, $oferta->imagen, $oferta->descripcion);
            }
            return $ofertas;
        }
        public function instert(){
            $conexion = PizzeriaDB::connectDB();
            $sql = "
            INSERT INTO oferta (titulo, imagen, descripcion) VALUES ('$this->titulo','$this->imagen','$this->descripcion')
            ";
            if($conexion->exec($sql))
                return true;
        }
        public function delete(){
            $conexion = PizzeriaDB::connectDB();
            $sql = "DELETE FROM oferta WHERE id=$this->id";
            $conexion->exec($sql);
        }
    }
?>