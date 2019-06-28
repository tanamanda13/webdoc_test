<?php
require_once 'assets/config/bootstrap.php';

$page_title = 'Back-Office';
include 'assets/inc/header.php';
?>

  <div class="container border mt-4 p-4">
    <h1>Liste des messages</h1>

    <?php viewFlashes(); ?>

        

    <table class="table">
      <thead>
        <tr>
          <th></th>
          <th scope="col">Noms</th>
          <th scope="col">Messages</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        
        <?php foreach(allPosts($pdo) as $post): ?>
          <tr>
            <td><?= $post['name']; ?></td>
            <td><?= $post['message']; ?></td>
          
            <td>
              <a href="posts_delete.php?name=<?php echo $post['name'] ?>"  class="btn btn-danger">
                Supprimer
              </a>
            </td>
          </tr>
        <?php endforeach; ?>


        
      </tbody>
    </table>
  </div>

<?php include 'assets/inc/footer.php'; ?>