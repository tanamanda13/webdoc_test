<?php
require_once 'assets/config/bootstrap.php';

$page_title = 'Back-Office';
include 'assets/inc/header.php';
?>

  <div class="container border mt-4 p-4">
    <h1>Liste des articles</h1>

    <?php viewFlashes(); ?>

    <a href="article_add.php" class="btn btn-primary">
      Ajouter un nouvel article
    </a>

          
        

    <table class="table">
      <thead>
        <tr>
        
        <th scope="col">Chapitre 1</th>
          <th scope="col">Partie</th>
          
          <th scope="col">Titre</th>
          <th scope="col">Description</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        
        <?php foreach(allArticles($pdo) as $article): ?>
          <tr>
            <th></th>
            <th scope="row"><?= $article['id']; ?></th>
            <td><?= $article['titre']; ?></td>
            <td><?= $article['description']; ?></td>
            <td>
              <a href="article_edit.php?id=<?= $article['id']; ?>" class="btn btn-success">
                Modifier
              </a>
            </td>
            <td>
              <a href="#" class="btn btn-danger">
                Supprimer
              </a>
            </td>
          </tr>
        <?php endforeach; ?>


        
      </tbody>
    </table>
  </div>

<?php include 'assets/inc/footer.php'; ?>