<?php 
session_start(); // démarre la session 
include_once 'connexion.php';

$identifiant = $_POST['i'];
$motDePasse = $_POST['m'];


$connexion = $test -> selectUtilisateur($identifiant, $motDePasse);
$count = count($connexion);
if ($count == 1) {
  $_SESSION['identifiant'] = $connexion[0]['identifiant'];//déclare la variable session
  header('location: premier.php');
}
if ($count == 1) { //!empty($connexion) permet de vérifier si l'élément est vide. C'est une fonction php.
    $colRole = $test ->selectRole($identifiant, $motDePasse);
    $role = $colRole[0]['role'];
    switch ($role) {
        case "client":
          echo "<h2>Bienvenue ". $identifiant .'! </h2> Vous êtes dans votre espace client!';
          break;
        case "admin":
          echo "<h2>Bienvenue ". $identifiant .'! </h2> Vous êtes dans votre espace administrateur!';
          break;
        default:
    echo 'Vous êtes connecté';
}

} else {
    
  echo '
  <h1 class="ml15" id="alert">
  <span class="word" > ERROR</span>
  <span class="word"> 404</span>
</h1>
  <h6 class="ml11">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters">Identifiant ou mot de passe incorrect !</span>  
    <div class="letters"></div>
  </span>
</h6>
</p> <a class="retour" href="deuxieme.php">Réessayer</a>

        ';
}


?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="script.js"></script>
