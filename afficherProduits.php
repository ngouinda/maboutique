<?php
require_once 'Connexionbd.php';
require_once 'GestionProduit.php';

$gestionProduit = new GestionProduit($bdd);
$produits = $gestionProduit->getProduits();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>

    <!--  Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- 🔹 Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Gestion Produits</a>
        </div>
    </nav>

    <div class="container">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Liste des Produits</h4>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>Nom du Produit</th>
                                <th>Prix du Produit</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($produits as $produit): ?>
                            <tr>
                                <td><?= htmlspecialchars($produit['nom_produit']) ?></td>
                                <td><?= htmlspecialchars($produit['prix_produit']) ?> €</td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
