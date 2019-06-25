<?php
require_once 'assets/config/bootstrap.php';



// Traitement du formulaire d'ajout
if (isset($_POST['add'])) {
  $titre = trim(strip_tags($_POST['titre']));
  $description = trim(strip_tags($_POST['description']));

  if (strlen($titre) < 3 || strlen($titre) > 50) {
    addFlash('danger', 'Le titre doit contenir entre 3 et 50 caractères');
  } elseif (strlen($description) > 255) {
    addFlash('danger', 'Le description ne peut contenir plus de 255 caractères');
  } else {
    $req = $pdo->prepare(
      'INSERT INTO article (
        titre,
        description
      ) VALUES (
        :titre,
        :desc
      )'
    );
    $req->bindParam(':titre', $titre);
    // bindParam() n'accepte que des variables
    // Récupérer la première valeur truthy:
    // $val1 ?: $val2 ?: $val3
    $req->bindValue(':desc', $description ?: null);

    // On vérifie que la requête s'exécute correctement
    $exec = $req->execute();
    if (!$exec) {
      addFlash('danger', 'Problème SQL');
    } else {
      addFlash('success', 'Article enregistré !');
      unset($_POST);
    }
  }
}

$page_title = 'Nouvelle article';
include 'assets/inc/header.php';
?>

  <div class="container border mt-4 p-4">
    <h1>Nouvel article</h1>

    <?php viewFlashes(); ?>

    <?php foreach (getFlashes() as $flash): ?>
      <div class="alert alert-<?= $flash['type']; ?>">
        <?= $flash['content']; ?>
      </div>
    <?php endforeach; ?>

    <form action="article_add.php" method="post">
      <div class="form-group">
        <label>Titre</label>
        <input type="text" name="titre" class="form-control" value="<?= $_POST['titre'] ?? ''; ?>">
      </div>

      <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"><?= $_POST['description'] ?? ''; ?></textarea>
      </div>

      <input type="submit" name="add" value="Ajouter" class="btn btn-primary">
    </form>
  </div>

<?php include 'assets/inc/footer.php'; ?>