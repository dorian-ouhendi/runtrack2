<?php 
for ($var =0;$var <=100;$var ++) {
    if (($var>= 0) && ($var<= 20)){
        echo "<i>$var</i><br>";
    }
    elseif (($var== 42)){
        echo "LaPlateforme_"."<br/>";
    }
    elseif (($var>= 25) && ($var<=50)){
        echo"<u>$var</u><br>";
    }
    else {
        echo $var . '<br>';
    }
}
?>