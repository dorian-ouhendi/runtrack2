<?php
$jour = 0;
function bonjour($jour) {
    if ($jour == 0){
    return ("bonjour");
    }
    elseif($jour == 1){
        return("bonsoir");
    }
}
echo bonjour($jour);
?>