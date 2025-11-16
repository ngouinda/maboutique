<?php 

class Connexionbd {

    private $connexion;
    public function __construct( $hote, $utilisateur, $motDePasse, $baseDeDonnees) {
        try {
            $this->connexion = new PDO("mysql:host=$hote;dbname=$baseDeDonnees", $utilisateur, $motDePasse);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion réussie à la base de données.";
        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }
        
    public function getConnexion() {
        return $this->connexion;
    }

    public function __destruct()
    {
        $this->connexion = null;
        echo "déconnexion réussie. <br>";
    }
}


$connexionBD = new Connexionbd('localhost', 'root', '', 'maboutique');

$bdd = $connexionBD->getConnexion();
?>