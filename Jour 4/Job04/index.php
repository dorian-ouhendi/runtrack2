<?php
    if(isset($_POST['username']) && ($_POST['password'])) {
    echo "Vous avez 2 arguments";
    }
    elseif(isset($_POST['username'])) {
        echo "<p><strong> Vous n'avez pas rempli les conditions</strong></p>"; }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
    <body>
        <form method="POST" action="">
            <label for="username">Nom d'utilisateur:</label>
                <input type="text" id="username" name="username"><br>
            <label for="pass">Mot de passe:</label>
                <input type="password" id="pass" name="password"><br>
                <input type="submit" value="Enregistrer">
        </form>
      <table>
        <thead>
            <tr>
                <td>Arguments</td>
                <td>Valeurs</td>
            </tr>
        </thead>
            <tbody>
            <?php
        foreach($_POST as $key => $Value) {
        echo "<tr>"."<td>".$key."</td>"."<td>".$Value."</td>"."</tr>";
        }
    ?>
            </tbody>
      </table>  
    </body>
</html>