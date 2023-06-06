<?php require_once "base.html.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Vehicule</title>
</head>
<body>
    <h1>Edit Vehicule</h1>
    <form action="<?= URL ?>editvalid/<?= $vehicule->getId() ?>" method="POST">
        <input type="hidden" name="id-vehicule" value="<?= $vehicule->getId() ?>">
        <label for="marque">Marque:</label>
        <input type="text" name="marque" id="marque" value="<?= $vehicule->getMarque() ?>" required><br><br>
        <label for="modele">Modele:</label>
        <input type="text" name="modele" id="modele" value="<?= $vehicule->getModele() ?>" required><br><br>
        <label for="couleur">Couleur:</label>
        <input type="text" name="couleur" id="couleur" value="<?= $vehicule->getCouleur() ?>" required><br><br>
        <label for="immatriculation">Immatriculation:</label>
        <input type="text" name="immatriculation" id="immatriculation" value="<?= $vehicule->getImmatriculation() ?>" required><br><br>
        <input type="submit" value="Edit">
    </form>
</body>
</html>
