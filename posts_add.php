<?php
require_once 'assets/config/bootstrap.php';



// Traitement du formulaire d'ajout
if (isset($_POST['add'])) {
  $name = htmlspecialchars(trim(strip_tags($_POST['name'])));
  $message = htmlspecialchars(trim(strip_tags($_POST['message'])));

  if (strlen($message) > 255) {
    addFlash('danger', 'Le description ne peut contenir plus de 255 caractères');
  } else {
    $req = $pdo->prepare(
      'INSERT INTO posts (
        name,
        message
      ) VALUES (
        :name,
        :message
      )'
    );
    $req->bindParam(':name', $name);
    // bindParam() n'accepte que des variables
    // Récupérer la première valeur truthy:
    // $val1 ?: $val2 ?: $val3
    $req->bindValue(':message', $message ?: null);

    // On vérifie que la requête s'exécute correctement
    $exec = $req->execute();
    if (!$exec) {
      addFlash('danger', 'Problème SQL');
    } else {
      addFlash('success', 'Message enregistré !');
      unset($_POST);
    }
  }
}

$page_title = 'Nouveau message';
include 'assets/inc/header-posts.php';
?>

  <div class="container__post--add">
    <a href="posts.php" class="post__add--return">
    Retour au livre d'or</a>

    <h1 class="post__add--title">Nouveau message</h1>

    <?php viewFlashes(); ?>

    <?php foreach (getFlashes() as $flash): ?>
      <div class="alert alert-<?= $flash['type']; ?>">
        <?= $flash['content']; ?>
      </div>
    <?php endforeach; ?>

    <form action="posts_add.php" method="post">
      <div>
        <label>Nom</label><br>
        <input type="text" name="name" class="post__add--input" value="<?= $_POST['name'] ?? ''; ?>">
      </div>

      <div>
        <label>Message</label><br>
        <textarea name="message" class="post__add--input" ><?= $_POST['message'] ?? ''; ?></textarea>
      </div>

      <input type="submit" name="add" value="Ajouter" class="post__add--btn">
    </form>
  </div>

<?php include 'assets/inc/nav_footer.php'; ?>
<?php include 'assets/inc/footer.php'; ?>