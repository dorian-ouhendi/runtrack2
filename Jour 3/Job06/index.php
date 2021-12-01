<?php
$str  = "Les choses que l'on possede finissent par nous posseder.";
$x = -1; 
    while (isset($str[$x])) {
        echo $str[$x];
        $x--; 
    }
?>