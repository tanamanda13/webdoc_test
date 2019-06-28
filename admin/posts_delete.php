<?php
require_once 'assets/config/bootstrap.php';

$id_name = $_GET['name'];

    $req = $pdo->prepare(
        "DELETE FROM posts
          WHERE name = '$id_name'"
    );

    $exec = $req->execute();
    header('Location: posts.php');
?>