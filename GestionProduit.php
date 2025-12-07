<?php 

class GestionProduit{
    private $connexion;
    public function __construct($connexion){
        $this->connexion = $connexion;
    }

    public function ajouterProduit($nom_produit, $prix_produit){
        try {
            $sql = "INSERT INTO produits (nom_produit, prix_produit) VALUES (:nom_produit, :prix_produit)";
            $stmt = $this->connexion->prepare($sql);
            $stmt->bindParam(':nom_produit', $nom_produit);
            $stmt->bindParam(':prix_produit', $prix_produit);
            $stmt->execute();
            echo "Produit ajouté avec succès! <br><br>";
        } catch (PDOException $e) {
            echo "Erreur lors de l'ajout du produit : " . $e->getMessage();
        }
    }   

    // MEthode pour recuperer les produits
    public function getProduits(){
        try {
            $sql = "SELECT * FROM produits";
            $stmt = $this->connexion->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération des produits : " . $e->getMessage();
            return [];
        }
    }
}