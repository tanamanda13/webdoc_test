<?php

// Fichier de configuration principal
// (à inclure au début des pages)
// n'à rien à voir avec Bootstrap CSS...

// __DIR__ est une "constante magique"
// Elle retourne le chemin du dossier du fichier dans lequel on l'appelle
require __DIR__ . '/param.php';

require __DIR__ . '/bdd.php';

require __DIR__ . '/fonctions.php';

session_start();