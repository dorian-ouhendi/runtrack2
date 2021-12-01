<?php
$text = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$x = 0; 
while (isset($text[$x])) {
    echo $text[$x]; 
    $x= $x+2; 
}
?>