<?php
$sexe = "Homme";
$age ="19";
$Nom ="Dorian";
$etudiant = false; 
$demi = "19,5"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job03</title>
</head>
<body>
    <table>
        <thead>
            <th colspan="2">Tête de tableau</th>
                <tr>
                    <td>Type</td>
                    <td>Nom</td>
                    <td>Valeur</td>
        </thead>
                </tr>
            <tbody>
                <tr>
                    <td><?= $sexe; ?></td>
                    <td><?= $Nom; ?></td>
                    <td><?= $age; ?></td>
                </tr>
                    <td><?= $etudiant; ?></td>
                    <td></td>
                    <td><?= $demi; ?></td>
            </tbody>  
    </table>   
</body>
</html>