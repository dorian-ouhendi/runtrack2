<?php
$tableau = array(200,204,173,98,171,404,459);
$i = 0;
while (isset($tableau[$i])) {
    if ($tableau[$i] % 2 == 0) {
        echo $tableau[$i] . "est pair <br/>"; 
    } 
    else {
        echo $tableau[$i] . "est impair <br/>"; 
    }
    $i ++;
}
?>