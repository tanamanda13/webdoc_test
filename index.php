<?php

// Récupérer le fichier de configuration principal
require 'assets/config/bootstrap.php';

// Début de page (Doctype, head)

include 'assets/inc/header.php';
?>

<div class="container container--page1">
 
 <?php include 'assets/inc/page1.php'?>

</div>


<div class="container container--page2">
 
 <?php include 'assets/inc/page2.php'?>

</div>


    



<?php
// Fin de page (scripts)
include 'assets/inc/footer.php';
?>