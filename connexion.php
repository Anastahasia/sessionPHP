<?php
class maConnexion{

    private $nomBaseDeDonnees/* = ""*/;
    private $motDePasse/* = ""*/;
    private $utilisateur/* = "root"*/;
    private $hote/* = "localhost"*/;
    private $connexionPDO;

    public function __construct($nomBaseDeDonnees, $motDePasse, $utilisateur, $hote){
        $this ->nomBaseDeDonnees = $nomBaseDeDonnees;
        $this ->motDePasse = $motDePasse;
        $this ->utilisateur = $utilisateur;
        $this ->hote = $hote;

        try {
            $dsn = "mysql:host=$this->hote;dbname=$this->nomBaseDeDonnees;charset=utf8mb4";
            $this->connexionPDO = new PDO($dsn, $this ->utilisateur, $this ->motDePasse);
            $this->connexionPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            

        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }

    }

    public function selectUtilisateur ($identifiant, $mdp){
        try{
            $requete = "SELECT * FROM utilisateur WHERE identifiant = :identifiant AND mot_de_passe = :mdp";
            $requete_prepare = $this->connexionPDO->prepare($requete);

            $requete_prepare->bindParam(':identifiant',$identifiant,PDO::PARAM_STR);
            $requete_prepare->bindParam(':mdp',$mdp,PDO::PARAM_STR);

            $resultat = $requete_prepare->execute();
            $resultat = $requete_prepare->fetchAll(PDO::FETCH_ASSOC);

            return $resultat;
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function selectRole ($identifiant, $mdp){
        try{
            $requete = "SELECT role FROM utilisateur WHERE identifiant = :identifiant AND mot_de_passe = :mdp";
            $requete_prepare = $this->connexionPDO->prepare($requete);

            $requete_prepare->bindParam(':identifiant',$identifiant,PDO::PARAM_STR);
            $requete_prepare->bindParam(':mdp',$mdp,PDO::PARAM_STR);

            $resultat = $requete_prepare->execute();
            $resultat = $requete_prepare->fetchAll(PDO::FETCH_ASSOC);

            return $resultat;
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function insertionClient($identifiant, $mdp){
        try {
            $requete = "INSERT INTO utilisateur (identifiant, mot_de_passe) VALUES(:identifiant, :mot_de_passe)";
            $requete_prepare = $this->connexionPDO->prepare($requete);

            $requete_prepare->bindParam(':identifiant',$identifiant,PDO::PARAM_STR);
            $requete_prepare->bindParam(':mot_de_passe',$mdp,PDO::PARAM_STR);

            $requete_prepare->execute();
            echo 'insertion reussie';

            return $requete_prepare;
            
        }catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

}

$test = new maConnexion("authentification", "", "root", "localhost"); 
?>