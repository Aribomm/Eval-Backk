<?php require_once "base.html.php"; ?>

<h2>Vehicule List</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Marque</th>
            <th>Modele</th>
            <th>Couleur</th>
            <th>Immatriculation</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($vehicules as $vehicule): ?>
    <tr>
        <td><?= $vehicule->getId() ?></td>
        <td><?= $vehicule->getMarque() ?></td>
        <td><?= $vehicule->getModele() ?></td>
        <td><?= $vehicule->getCouleur() ?></td>
        <td><?= $vehicule->getImmatriculation() ?></td>
        <td>
            <a href="<?= URL ?>conducteurs/edit/<?= $vehicule->getId() ?>">Edit</a>
            <a href="<?= URL ?>conducteurs/delete/<?= $vehicule->getId() ?>">Delete</a>
        </td>
    </tr>
<?php endforeach; ?>

    </tbody>
</table>
<a href="<?= URL ?>add">Add New Vehicule</a>
