<?php
session_start(); //établit la connexion
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <!-- <?php
        echo 'Ma couleur : '. $_SESSION["favcolor"]; //affiche la valeur de favcolor
        $_SESSION["favcolor"]="blue";
        
    ?> -->

<!-- formulaire de connexion -->
    <div class="login">
        <h1>Connexion</h1>
        <form method="POST" action="authentification.php">
            <input type="text" name="i" placeholder="Identifiant" required="required" />
            <input type="password" name="m" placeholder="Mot de passe" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large">Me connecter</button>
        </form>
    </div>

    <!-- <a href="troisieme.php"><img src="fermer.jpg" alt=""></a> -->
</body>
</html>