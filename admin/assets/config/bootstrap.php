<?php

// Fichier de configuration principal du Front-Office
require_once __DIR__ . '/../../../assets/config/bootstrap.php';


// Restriction d'accès
if (getUserInfo('type') !== 'admin') {
  addFlash('danger', 'Cet espace nécessite une authentification');
  header('Location: ../login.php');
}
