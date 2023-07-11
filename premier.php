<?php 
session_start(); //commence une session 

$_SESSION["favcolor"] = "green";//déclare une variable session
$_SESSION["favanimal"] = "cat";
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