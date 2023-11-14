<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<?php
session_start();


session_unset(); //supprime les variables 

session_destroy(); // ferme la session
 var_dump($_SESSION);

echo 'Vous êtes déconnecté'
?>
