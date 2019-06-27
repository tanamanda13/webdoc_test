<?php

// Récupérer le fichier de configuration principal
require 'assets/config/bootstrap.php';

// Début de page (Doctype, head)

include 'assets/inc/header.php';
?>
<svg style='display: none'>
  <!-- Skip Icon -->
  <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:none;">
    <symbol id="icon__skip">
      <path d="M1 17L9 9L0.999999 1" stroke="white"/>
      <path d="M5 17L13 9L5 1" stroke="white"/>
    </symbol>
  </svg>

  <!-- Facebook -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" aria-labelledby="title" aria-describedby="desc" role="img"
    xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
    <title>Facebook</title>
    <desc>A solid styled icon from Orion Icon Library.</desc>
    <symbol id="icon__facebook" viewBox="0 0 64 64">
      <path data-name="layer1"
        d="M39.8 12.2H48V0h-9.7C26.6.5 24.2 7.1 24 14v6.1h-8V32h8v32h12V32h9.9l1.9-11.9H36v-3.7a3.962 3.962 0 0 1 3.8-4.2z"
        fill="#473333"></path>
    </symbol>
  </svg>

  <!-- Twitter -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" aria-labelledby="title" aria-describedby="desc" role="img"
    xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
    <title>Twitter</title>
    <desc>A solid styled icon from Orion Icon Library.</desc>
    <symbol id="icon__twitter" viewBox="0 0 64 64">
      <path data-name="layer1"
        d="M64 13.194a23.1 23.1 0 0 1-7.3 2.1 14.119 14.119 0 0 0 5.5-7.2c-1.9 1.2-6.1 2.9-8.2 2.9a13.782 13.782 0 0 0-9.6-4 13.187 13.187 0 0 0-13.2 13.2 13.576 13.576 0 0 0 .3 2.9c-9.9-.3-21.5-5.2-28-13.7a13.206 13.206 0 0 0 4 17.4c-1.5.2-4.4-.1-5.7-1.4-.1 4.6 2.1 10.7 10.2 12.9-1.6.8-4.3.6-5.5.4.4 3.9 5.9 9 11.8 9-2.1 2.4-9.3 6.9-18.3 5.5a39.825 39.825 0 0 0 20.7 5.8 36.8 36.8 0 0 0 37-38.6v-.5a22.861 22.861 0 0 0 6.3-6.7z"
        fill="#473333"></path>
    </symbol>
  </svg>
</svg>



<body>
  <!-- CHAPITRE 2 -->
  <?php include 'assets/inc/chapter2.php'; ?>

<?php
// Timeline
include 'assets/inc/nav_timeline.php';

// Barre de navigation
include 'assets/inc/nav_footer.php';
// Fin de page (scripts)
include 'assets/inc/footer2.php';
?>