<?php
$str = "Dans l'espace, personne ne vous entend crier";
$cal = 0;
$tab = array ("Dans l'espace, personne ne vous entend crier");
    for ($x = 0;isset($str[$x]);$x++) {
        for ($j = 0;isset($tab[$j]);$j++) {
            if ($str[$x]= $tab[$j]) {
            $cal++;}
        }
    }
echo $cal;
?>