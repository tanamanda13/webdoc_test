<?php
require_once 'assets/config/bootstrap.php';

$page_title = 'Back-Office';
include 'assets/inc/header-posts.php';
?>

  <div class="post__container">
    <h1 class="post__title">Livre d'or</h1>

    <?php viewFlashes(); ?>

    <a href="posts_add.php" class="post__new">
      Écrire un message
    </a>

          
        

    <table class="table">
      <thead>
        <tr>
        
        <th class="table__header">Noms</th>
       
        <th class="table__header">Messages</th>
         
        </tr>
      </thead>
      <tbody>
        
        <?php foreach(allPosts($pdo) as $post): ?>
          <tr>
            
            <td scope="row"><?= $post['name']; ?></td>
            <td><?= $post['message']; ?></td>
            
          </tr>
        <?php endforeach; ?>


        
      </tbody>
    </table>
  </div>

<?php include 'assets/inc/nav_footer.php'; ?>
<?php include 'assets/inc/footer.php'; ?>