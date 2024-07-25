<?php
    class MonstruoDeLasGalletas{
        private $galletas;

        public function __construct($s=0){
            $this->galletas = $s;
        }

        public function getGalletas(){
            return $this->galletas;
        }

        public function come($g){
            $this->galletas += $g;
            
        }
    }
?>