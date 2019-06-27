<?php
require_once 'assets/config/bootstrap.php';

// include 'assets/inc/header.php';

// Traitement du formulaire de connexion
if (isset($_POST['login'])) {
  // Rechercher l'utilisateur
  $req = $pdo->prepare(
    'SELECT *
    FROM utilisateur
    WHERE
      email = :identifiant
      OR pseudo = :identifiant'
  );
  $req->bindParam(':identifiant', $_POST['identifiant']);
  $req->execute();

  $user = $req->fetch(PDO::FETCH_ASSOC);
  if (!$user) {
    // Si aucun utilisateur n'a été retrouvé
    addFlash('danger', 'Aucun utilisateur n\'a été trouvé !');

  } elseif(!password_verify($_POST['mdp'], $user['mdp'])) {
    // Si le mot de passe ne correspond pas au hash en BDD
    addFlash('danger', 'Mot de passe incorrect');

  } else {
    // On enregistre l'utilisateur en session
    unset($user['mdp']); # le hash du mdp n'est pas à mettre en session
    $_SESSION['user'] = $user;

    // Redirection sur la page d'accueil
    session_write_close(); // Fermer la session
    header('Location: index.php');
  }
}


//Déconnexion
if(isset($_GET['logout'])) {
  unset($_SESSION['user']);
  addFlash('success', 'Vous avez bien été déconnecté');
}

// Début de page
$page_title = 'Connexion';
include 'assets/inc/header-login.php'; 
?>

<!--<div class="container border mt-4 p-4">-->
<div class="box__login">  
  <div class="box__login--sub">
    <h1 class="title__login">Accéder au compte admnistrateur</h1>

    <?php viewFlashes(); ?>

    <?php foreach (getFlashes() as $flash): ?>
      <div class="alert alert-<?= $flash['type']; ?>">
        <?= $flash['content']; ?>
      </div>
    <?php endforeach; ?>

    <form class="form__login" action="login.php" method="post">
      
        <label class="label__login">Email | Pseudo :</label>
        <span><input class="input__login" type="text"  name="identifiant"><br></span>

        <label class="label__login">Mot de passe : </label>
        <span><input class="input__login" type="password" name="mdp" ><br></span>

        <input class="input__login--btn" type="submit" name="login" value="Connexion">
      
    </form>
  </div>
  
</div>


<?php include 'assets/inc/nav_footer.php'; ?>

<?php include 'assets/inc/footer.php'; ?>