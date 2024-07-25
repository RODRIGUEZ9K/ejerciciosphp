<?php
    function opera($x, $y=NULL, $z=NULL){
        if(!isset($y)){
            return $x * $x;
        } else if (!isset($z)){
            return $x * $y;
        } else {
            return $x + $y + $z;
        }
    }

    function opera2($a, $b){
        if(is_int($a) && is_int($b)){
            return $a + $b;
        } else {
            return $a.", ".$b." , uno o ambos valores no son enteros";
        }
    }
?>