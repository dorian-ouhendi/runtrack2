<?php
$str ="On n'est pas le meilleur quand on le croit mais quand on le sait.";
$nbvoyelles = 0;
$nbconsonnes = 0;
$dic = array (
    "voyelles"=> array ('a','e','i','o','u','y'),
    "consonnes"=> array ('b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','w','x','z')
);
    for ($x = 0;isset($str[$x]);$x++) {
        for ($j = 0;isset($dic["voyelles"][$j]);$j++) {
            if ($str[$x]== $dic["voyelles"][$j]) { 
            $nbvoyelles++;}
            }   
             for ($w = 0;isset($dic["consonnes"][$w]);$w++) { 
                 if ($str[$x]== $dic["consonnes"][$w]) {
                     $nbconsonnes++;} 
                 }
    }
echo $nbvoyelles;
echo $nbconsonnes;
?>