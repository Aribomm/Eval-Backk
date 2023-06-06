
<?php


require_once "base.html.php";
?>

<?php
$conducteurController = new ConducteurController();
$conducteurs = $conducteurController->getAllConducteurs();
?>

<h2>Conducteur</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($conducteurs as $conducteur) : ?>
            <tr>
                <td><?= $conducteur->getId(); ?></td>
                <td><?= $conducteur->getNom(); ?></td>
                <td><?= $conducteur->getPrenom(); ?></td>
                <td>
                    <a href="edit.conducteur.view.php' . $conducteur->getId(); ?>"><i class="fas fa-edit"></i></a>
                    <a href="delete.php/<?= $conducteur->getId(); ?>"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>


    </tbody>
</table>
<a href="#">Ajoute Conducteur</a>


<?php include_once "vehicule.view.php"; ?>

