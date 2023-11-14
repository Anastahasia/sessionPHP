<?php 
session_start(); //commence une session 

$_SESSION["favcolor"] = "green";//déclare une variable session
$_SESSION["favanimal"] = "cat";

var_dump($_SESSION["favcolor"]);
var_dump($_SESSION);

$monTabAssociatif["nom"] = "polo";

var_dump($monTabAssociatif);
if($_SESSION['identifiant']){ // pour tester $_SESSION
    echo"Il y a l'utilisateur " . $_SESSION['identifiant'] . " de connecté";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="deuxieme.php">Hello</a>
    <a href="troisieme.php">Bye</a>
</body>
</html>