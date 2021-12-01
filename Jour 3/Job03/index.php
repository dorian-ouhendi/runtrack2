<?php
$str= "I'm sorry Dave I'm afraid I can't do that";
$x= 0;
$char = array('a','e','i','o','u','y','I');
    while (isset($str[$x])) {
        $j= 0;
        while (isset($char[$j])) {
            if ($str[$x]== $char[$j]) {
                echo $str[$x];
            } 
        $j++;
        }
    $x++;
    }
?>