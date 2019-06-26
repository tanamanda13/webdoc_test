<?php
require_once 'assets/config/bootstrap.php';

$article = getArticle($pdo, $_GET['id'] ?? 0);
//$article = getArticle($pdo, $idd ?? 0);

if (!$article) {
  addFlash('danger', 'Article inconnue');
  session_write_close();
  header('Location: index.php');
}

// Traitement du formulaire d'edition
if (isset($_POST['edit'])) {
  //$eId = $_SESSION['article']['id'];
  $eId = $article['id'];
  //$eId = intval($_GET['id']);
  //$idd = (int)$eId;
  $titre = htmlspecialchars(trim(strip_tags($_POST['titre'])), ENT_QUOTES);
  $description = htmlspecialchars(trim(strip_tags($_POST['description'])), ENT_QUOTES);

  if (strlen($titre) < 3 || strlen($titre) > 250) {
    addFlash('danger', 'Le titre doit contenir entre 3 et 100 caractères');
  } elseif (strlen($description) > 255) {
    addFlash('danger', 'Le description ne peut contenir plus de 255 caractères');
  } else {
    $req = $pdo->prepare(
      "UPDATE article SET
        titre = '$titre',
        description = '$description'
        WHERE id = '$eId'"
    );
    $req->bindParam(':titre', $titre);
    //$req->bindParam(':id', $eId);
    $req->bindParam(':eid', $eId);
    //$req->bindParam(':id', $idd);
    //$req->bindParam(':id', $_GET['id']);
    // bindParam() n'accepte que des variables
    // Récupérer la première valeur truthy:
    // $val1 ?: $val2 ?: $val3
    $req->bindValue(':desc', $description ?: null);

    // On vérifie que la requête s'exécute correctement
    $exec = $req->execute();
    if (!$exec) {
      addFlash('danger', 'Problème SQL');
    } else {
      addFlash('success', 'Modification enregistrée !');
      unset($_POST);
    }
  }
}

$page_title = 'Modifier un article';
include 'assets/inc/header.php';
?>

  <div class="container border mt-4 p-4">
    <h1>Modifier un article</h1>

    <?php viewFlashes(); ?>

    <form action="article_edit.php?id=<?= $_GET['id'] ?>" method="post">
      <div class="form-group">
        <label>Titre</label>
        <input type="text" name="titre" class="form-control" value="<?= $article['titre']; ?>">
      </div>

      <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"><?= $article['description']; ?></textarea>
      </div>

      <input type="submit" name="edit" value="Modifier" class="btn btn-primary">
    </form>
  </div>


<?php include 'assets/inc/footer.php'; ?>

