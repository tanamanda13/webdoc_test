<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
   <link rel="stylesheet" href="css/reset.css"/>
   <link rel="stylesheet" href="css/style.css"/>
  <title class="title">Webdoc_mamp</title>
</head>
<body>
<!-- Header HTML -->
  <ul class="nav">
    <li class="nav-item">
      <a href="index.php" class="nav-link">
        Home
      </a>
    </li>
    <?php if(isConnected()): ?>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <?= getUserInfo('pseudo'); ?>
        </a>
      </li>
      <li class="nav-item">
        <a href="login.php?logout" class="nav-link">
          Déconnexion
        </a>
      </li>

      <?php if (getUserInfo('type') === 'admin'): ?>
        <li class="nav-item">
          <a href="admin/" class="nav-link">
            Back-Office
          </a>
        </li>
      <?php endif; ?>

    <?php else: ?> 
      <li class="nav-item">
        <a href="login.php" class="nav-link">
          Connexion
        </a>
      </li>
    <?php endif; ?>
  </ul>