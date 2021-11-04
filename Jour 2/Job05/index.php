<?php 
    // Ici on va faire un algo, l'ojectif est d'avoir seulement les nombres premiers qui apparaissent
for ($var= 2;$var <=1000;$var ++){
    $x= 0; // Fonction qui va récupérer les diviseurs 
    for ($var2= 1;$var2 <=$var; $var2++){ // Ici on dit que tant que la variable 1 est plus faible que la variable 2 alors on continue
        if ($var % $var2== 0) { // Ici on applique la division pour trouver les nombres premiers (divisable uniquement par 1 ou eux)
            $x ++; 
    }
}
    if ($x== 2){ // Ici avec la variable x on récupère les diviseurs que l'on affiche après avec l'echo ! 
        echo $var."<br/>"; 
    }
}
?>