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
</body>
</html>
<?php
    if ($_POST['username']== "John" && $_POST['password']== "Rambo") {
    echo "C'est pas ma guerre"; 
}
    else  {
        echo "Votre pire cauchemar";
    }
?>