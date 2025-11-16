<!-- <?php 
// require_once 'Connexionbd.php';
// require_once 'GestionProduit.php';

// $gestionProduit = new GestionProduit($bdd);
// $gestionProduit->ajouterProduit('chargeur', 29.99);

?>

<form action=" ajouterProduit.php" method="post">

    <input type="text" name="nom_produit" placeholder="Nom du produit">
    <input type="text" name="prix_produit" placeholder="Prix du produit">
    <input type="submit" value="Ajouter Produit">
</form> -->
<?php 
require_once 'Connexionbd.php';
require_once 'GestionProduit.php';

$gestionProduit = new GestionProduit($bdd);
 $gestionProduit->ajouterProduit('chargeur', 29.99);

// // Traitement du formulaire
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $nom = htmlspecialchars($_POST['nom_produit']);
//     $prix = floatval($_POST['prix_produit']);

//     if (!empty($nom) && $prix > 0) {
//         $gestionProduit->ajouterProduit($nom, $prix);
//         $message = "Produit ajouté avec succès !";
//     } else {
//         $message = "Veuillez remplir tous les champs correctement.";
//     }
// }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f2f4f7;
        }
        .card {
            border-radius: 15px;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.html">
                <i class="bi bi-bag-plus"></i> Ma Boutique
            </a>
        </div>
    </nav>

    <!-- FORMULAIRE -->
    <div class="container mt-5" style="max-width: 600px;">
        <div class="card shadow p-4">
            <h2 class="text-center mb-4">Ajouter un produit</h2>

            <?php if (!empty($message)): ?>
                <div class="alert alert-info text-center"><?= $message ?></div>
            <?php endif; ?>

            <form action="ajouterProduit.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Nom du produit</label>
                    <input type="text" class="form-control" name="nom_produit" placeholder="Ex : Chargeur USB" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Prix du produit (€)</label>
                    <input type="number" step="0.01" class="form-control" name="prix_produit" placeholder="Ex : 29.99" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Ajouter</button>
            </form>

            <div class="text-center mt-3">
                <a href="produits.html" class="text-decoration-none">← Retour aux produits</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
