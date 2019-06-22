<?php

// Ajouter un message "flash"
/*
  On peut typer les arguments des fonctions
    type $arg
  On peut indiquer le type de ce qui est retourné par la fonction
    function foo() : type
  void = rien n'est retourné
*/
function addFlash(string $type, string $content) : void
{
  /*
  Pour insérer un élément en fin de tableau :
    $tableau[] =
    Cette syntaxe va aussi créer le tableau s'il n'existe pas
  */
  $_SESSION['flash'][] = [
    'type'    => $type,
    'content' => $content,
  ];
}

// Récupérer les messages flash
function getFlashes() : array
{
  if (isset($_SESSION['flash'])) {
    $messages = $_SESSION['flash'];
    unset($_SESSION['flash']); // supprimer la valeur d'une variable/la clé d'un tableau
    return $messages;
  }
  return [];

  // Opérateur d'union null (??)
  // Retoune la première valeur définie et non-nulle
  /* $messages = $_SESSION['flash'] ?? [];
  unset($_SESSION['flash']);
  return $messages; */
}

// Afficher les messages flash
function viewFlashes() : void 
{
  foreach (getFlashes() as $flash) {
    // PHP_EOL = "PHP End Of Line" --> Retour
    echo '<div class="alert alert-' . $flash['type'] . '">' . PHP_EOL;
    echo $flash['content'] . PHP_EOL;
    echo '</div>' . PHP_EOL;
  }
}




// Savoir si un utilisateur est connecté
function isConnected() : bool 
{
  return isset($_SESSION['user']);
}

// Récupérer une information de l'utilisateur
// Le typage nullable permet d'indiquer un type ou la valeur nulle
// C'est utilisable pour le typage d'arguments et de retour
// ?type
function getUserInfo(string $info) : ? string 
{
  return $_SESSION['user'][$info] ?? null;
}




// Récupérer la liste des catégories
// On peut typer ses arguments avec le nom d'une classe
function allArticles(PDO $con) : array
{
  $req = $con->query('SELECT * FROM article');
  return $req->fetchAll(PDO::FETCH_ASSOC);
}

// Récupérer les informations d'un article
function getArticle(PDO $con, int $id)
{
  $req = $con->prepare(
    'SELECT *
    FROM article
    WHERE id = :id'
  );
  $req->bindParam(':id', $id, PDO::PARAM_INT);
  $req->execute();
  return $req->fetch(PDO::FETCH_ASSOC);
}