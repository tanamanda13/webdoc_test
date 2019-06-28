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
        d="M39.8 12.2H48V0h-9.7C26.6.5 24.2 7.1 24 14v6.1h-8V32h8v32h12V32h9.9l1.9-11.9H36v-3.7a3.962 3.962 0 0 1 3.8-4.2z"></path>
    </symbol>
  </svg>

  <!-- Twitter -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" aria-labelledby="title" aria-describedby="desc" role="img"
    xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
    <title>Twitter</title>
    <desc>A solid styled icon from Orion Icon Library.</desc>
    <symbol id="icon__twitter" viewBox="0 0 64 64">
      <path data-name="layer1"
        d="M64 13.194a23.1 23.1 0 0 1-7.3 2.1 14.119 14.119 0 0 0 5.5-7.2c-1.9 1.2-6.1 2.9-8.2 2.9a13.782 13.782 0 0 0-9.6-4 13.187 13.187 0 0 0-13.2 13.2 13.576 13.576 0 0 0 .3 2.9c-9.9-.3-21.5-5.2-28-13.7a13.206 13.206 0 0 0 4 17.4c-1.5.2-4.4-.1-5.7-1.4-.1 4.6 2.1 10.7 10.2 12.9-1.6.8-4.3.6-5.5.4.4 3.9 5.9 9 11.8 9-2.1 2.4-9.3 6.9-18.3 5.5a39.825 39.825 0 0 0 20.7 5.8 36.8 36.8 0 0 0 37-38.6v-.5a22.861 22.861 0 0 0 6.3-6.7z"></path>
    </symbol>
  </svg>

  <!-- LEFT ARROW -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" aria-labelledby="title"
aria-describedby="desc" role="img" xmlns:xlink="http://www.w3.org/1999/xlink"
width="64" height="64" style="display:none;">
  <title>Left Key</title>
  <desc>A solid styled icon from Orion Icon Library.</desc>
  <symbol id="icon__left" viewBox="0 0 64 64">
    <path data-name="layer1"
    d="M54.2 2H9.8A7.8 7.8 0 0 0 2 9.8v44.4A7.8 7.8 0 0 0 9.8 62h44.4a7.8 7.8 0 0 0 7.8-7.8V9.8A7.8 7.8 0 0 0 54.2 2zM44 34H22.8l4.6 4.6a2 2 0 0 1-2.8 2.8l-8-8-1.4-1.4 9.4-9.4a2 2 0 1 1 2.8 2.8L22.8 30H44a2 2 0 0 1 0 4z">
  </path>
  </symbol>
</svg>

<!-- RIGHT ARROW -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" aria-labelledby="title"
aria-describedby="desc" role="img" xmlns:xlink="http://www.w3.org/1999/xlink"
width="64" height="64" style="display:none;">
  <title>Right Key</title>
  <desc>A solid styled icon from Orion Icon Library.</desc>
  <symbol id="icon__right" viewBox="0 0 64 64">
    <path data-name="layer1"
    d="M54.2 2H9.8A7.8 7.8 0 0 0 2 9.8v44.4A7.8 7.8 0 0 0 9.8 62h44.4a7.8 7.8 0 0 0 7.8-7.8V9.8A7.8 7.8 0 0 0 54.2 2zm-6.8 31.4l-8 8a2 2 0 0 1-2.8-2.8l4.6-4.6H20a2 2 0 0 1 0-4h21.2l-4.6-4.6a2 2 0 1 1 2.8-2.8l9.4 9.4z"></path>
  </symbol>
</svg>
</svg>

<body>
<section class="adblock">
  <h1 class="adblock__title title">La vie secrète des champignons</h1>
  <p class="adblock__text paragraph">Pour profiter au mieux de l'expérience de ce <strong>webdocumentaire</strong>, nous vous recommandons d'activer le son ou de mettre un <strong>casque audio</strong>.</p>
  <p class="adblock__text paragraph">La navigation s'effectuera au scroll ou avec les flèches de gauche et de droite.
  </p>
  <div class="sectionId adblock__icons">
    <div class="middle">
      <div class="mouse">
    </div>
    <svg class="icon__arrow" aria-hidden="true">
      <use xlink:href="#icon__left"></use>
    </svg>
    <svg class="icon__arrow" aria-hidden="true">
      <use xlink:href="#icon__right"></use>
    </svg>
  </div>  
  <p class="scrollNow subtitle">Scroller pour commencer la visite</p>
  <!-- <button class="disable__adblock subtitle">Commencer l'expérience</button> -->
  
</section>

  <!-- CHAPITRE 1 -->
<?php include 'assets/inc/chapter1.php'; ?>

<?php
// Timeline
include 'assets/inc/nav_timeline.php';

// Barre de navigation
include 'assets/inc/nav_footer.php';
// Fin de page (scripts)
include 'assets/inc/footer.php';
?>