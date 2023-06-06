<?php require_once "base.html.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Conductor</title>
</head>
<body>
    <h1>Edit Conductor</h1>
    <form action="<?= URL ?>conducteurs/editvalid" method="POST">
        <input type="hidden" name="id-conducteur" value="<?= $conducteur->getId() ?>">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" value="<?= $conducteur->getNom() ?>" required><br><br>
        <label for="prenom">Prenom:</label>
        <input type="text" name="prenom" id="prenom" value="<?= $conducteur->getPrenom() ?>" required><br><br>
        <input type="submit" value="Edit">
    </form>
</body>
</html>
