<?php ob_start() ?>

<table class="table table-hover text-center table-lg">
  <thead class="table-dark">
    <tr>
      <th>Title</th>
      <th>Number of players</th>
      <th colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($games as $game) : ?>
      <tr>
        <td><?= $game->getTitle() ?></td>
        <td><?= $game->getNbPlayers() ?></td>
        <td> 
          <form action="<?= URL ?>games/delete/<?= $game->getId()?>" method="post" onSubmit=" return confirm('Etes-vous sur? delete?')">
          <button type="submit" class="btn"><i class="fas fa-edit"></i>
    </button></form></td>
       
        <td> 
          <form action="<?= URL ?>games/delete/<?= $game->getId()?>" method="post" onSubmit=" return confirm('Etes-vous sur? delete?')">
          <button type="submit" class="btn"><i class="fas fa-trash"></i>
    </button></form></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?= URL ?>games/add" class="btn btn-success w-25 d-block m-auto shadow">Ajouter un jeu</a>

<?php
$content = ob_get_clean();
$title = "Liste de jeux";
require_once "base.html.php";
?>