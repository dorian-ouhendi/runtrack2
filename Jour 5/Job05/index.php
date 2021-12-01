<?php
function ocurrences ($str, $char) {
    for($x = 0;isset($str[$x]);$x++) {
        $cal = 0; 
        if ($str[$x] == $char) {
            $cal++;
        }
    }
    return $cal;
}
echo ocurrences("Yo ma chaine twitch c'est Alealize");
?>