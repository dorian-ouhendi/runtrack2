<?php
$a = 5;
$b = 10;
function calcule($a, $opération, $b){
    if ($opération == "+") {
        $cal = $a + $b; 
    } 
    elseif ($opération == "/") {
        $cal = $a / $b;
    }
    elseif ($opération == "*") {
        $cal = $a * $b;
    }
    elseif ($opération == "-") {
        $cal = $a - $b;
    }
    elseif ($opération == "%") {
        $cal = $a % $b;
    }
    return $cal; 
}
echo calcule($a, '+' , $b); 
?>