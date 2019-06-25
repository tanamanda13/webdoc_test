<?php

// Récupérer le fichier de configuration principal
require 'assets/config/bootstrap.php';

// Début de page (Doctype, head)

include 'assets/inc/header.php';
?>
<svg style='display: none'>
  <!-- LinkedIn -->
  <svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="title" aria-describedby="desc" role="img"
    xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
    <symbol id="icon__linkedin" viewBox="0 0 64 64">
      <path data-name="layer1"
        d="M1.15 21.7h13V61h-13zm46.55-1.3c-5.7 0-9.1 2.1-12.7 6.7v-5.4H22V61h13.1V39.7c0-4.5 2.3-8.9 7.5-8.9s8.3 4.4 8.3 8.8V61H64V38.7c0-15.5-10.5-18.3-16.3-18.3zM7.7 2.6C3.4 2.6 0 5.7 0 9.5s3.4 6.9 7.7 6.9 7.7-3.1 7.7-6.9S12 2.6 7.7 2.6z">
      </path>
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
  <!-- CHAPITRE 1 -->
  <section class="container container--page1">
    <!-- HERO -->
    <article class="subpart container hero sectionId">
      <div class="box__content">
        <video autoplay muted loop class="BG_video" id="bgvid">
        <source src="assets/media/videos/Trailer_fungi.mp4" type="video/mp4">
        </video>
        <!-- <h1 class="hero__title title">LA VIE SECRÊTE DES CHAMPIGNONS</h1> -->
      </div>
      </article>
      
    <!-- SOUS-PARTIE 1 -->
    <article class="subpart subpart1 sectionId">
      <div class="box__content">
        <video autoplay muted loop class="BG_video" id="bgvid">
          <source src="assets/media/videos/Mycelium_background_NB.mp4" type="video/mp4">
        </video>
        <div class="subpart1__timeline timeline">
        </div>
        <div class="subpart1__main">
          <h1 class="subpart1__title title">LE RÔLE DES CHAMPIGNONS DANS<br> L'EVOLUTION DE LA VIE <br> TERRESTRE</h1>
          <span class="subpart1__number title">01</span>
          <span class="subpart1__scroll title">SCROLL</span>
        </div>
      </div>
    </article>

    <!-- SOUS-PARTIE 2 -->
    <article class="subpart subpart2 sectionId">
      <div class="box__content">
        <div class="subpart2__main">
          <h3 class="subpart2__subtitle subtitle">FIN DE LA GRANDE PÉRIODE GLACIÈRE</h3>
          <h2 class="subpart2__title title">DE LA ROCHE <br>
            <hr> À LA TERRE
          </h2>
          <p class="subpart2__paragraph paragraph">Dans un milieu hostile, le champignon s’est imposé comme le façonneur
            de la croûte terreste. À chaque étape,
            il crée un terrain propice pour la vie.</p>
          <img class="subpart2__image" src="assets/media/subpart2.png" />
        </div>
        <?php include 'assets/inc/tooltips1.php' ?>
      </div>
    </article>

    <!-- SOUS-PARTIE 3 -->
    <article class="subpart subpart3 sectionId">
      <div class="box__content">
        <video autoplay muted class="BG_video" id="bgvid">
          <source src="assets/media/videos/vid_01.mp4" type="video/mp4">
        </video>
        <div class="subpart3__main">
        </div>
      </div>
    </article>

    <!-- SOUS-PARTIE 4 -->
    <article class="subpart subpart4 sectionId">
      <div class="box__content">
        <video autoplay muted loop class="BG_video--circle" id="bgvid">
          <source src="assets/media/videos/BBBcircle.mp4" type="video/mp4">
        </video>
        <div class="subpart4__main">
          <h3 class="subpart4__subtitle subtitle">PROTÉROZOIQUE TARDIF</h3>
          <h2 class="subpart4__title title">LE BIG BANG <br>
            <hr> BIOLOGIQUE
          </h2>
          <p class="subpart4__paragraph paragraph">Il y a 470 millions d'années, la vie se développe peu à peu sur la
            terre ferme délaissant le milieu aquatique. De bleue, notre planète devient verte.</p>
        </div>
        <?php include 'assets/inc/tooltips2.php' ?>
        <?php include 'assets/inc/tooltips3.php' ?>
      </div>
    </article>

    <!-- SOUS-PARTIE 5 -->
    <article class="subpart subpart5 sectionId">
      <div class="box__content">
        <video autoplay muted loop class="BG_video" id="bgvid">
          <source src="assets/media/videos/Blob_1.mp4" type="video/mp4">
        </video>
        <div class="subpart5__main">
          <h2 class="subpart5__keyfigures1 keyfigures1"><span class="keyfigures1--">LES CHAMPIGNONS</span><br> TROISIÈME
            FORME DE VIE SUR TERRE
          </h2>
          <h3 class="subpart5__keyfigures2 keyfigures2">80%</h3>
          <h4 class="subpart5__keyfigures3 keyfigures3">DE LA BIOMASSE TERRESTRE</h4>
        </div>
      </div>
    </article>

    <!-- SOUS-PARTIE 6 -->
    <article class="subpart subpart6 sectionId">
      <div class="box__content">
        <video autoplay muted loop class="BG_video--triangle" id="bgvid">
          <source src="assets/media/videos/Growing_plants2.mp4" type="video/mp4">
        </video>
        <div class="subpart6__main">
          <h3 class="subpart6__subtitle subtitle">ORDOVICIEN TARDIF</h3>
          <h2 class="subpart6__title title">L’EXPANSION DE LA
            <br>
            <hr> VIE TERRESTRE
          </h2>
          <p class="subpart6__paragraph paragraph">Après avoir colonisé les rivages, les champignons ont permis
            l'apparition des plantes terrestres en s’associant aux hépatiques (des végétaux primitifs).
            Cette nouvelle symbiose mènera à la création des premiers végétaux évolués...</p>
        </div>
      </div>
    </article>

    <!-- SOUS-PARTIE 7 -->
    <article class="subpart subpart7 sectionId">
      <div class="box__content">
        <video autoplay muted class="BG_video" id="bgvid">
          <source src="assets/media/videos/vid_03.mp4" type="video/mp4">
        </video>
        <div class="subpart7__main">
        </div>
      </div>
    </article>

    <!-- SOUS-PARTIE 8 -->
    <article class="subpart subpart8 sectionId">
      <div class="box__content">
        <div class="subpart8__main">
          <h3 class="subpart8__subtitle subtitle">CRÉTACÉ TARDIF</h3>
          <h2 class="subpart8__title title">LE DÉBUT D'UNE <br>
            <hr> NOUVELLE ÈRE
          </h2>
          <p class="subpart8__paragraph paragraph">Il y a 65 millions d’années, une météorite de la taille de Paris
            percute la terre. Elle provoqua l’extinction de plus de 70% des espèces. <br>Pourtant les champignons ont su
            tirer
            profit du cataclysme pour se développer davantage...</p>
          <img class="subpart8__image" src="assets/media/t-rex.png" />
          <img class="subpart8__image--2" src="assets/media/meteors.png" />
        </div>
      </div>
    </article>

    <!-- SOUS-PARTIE 9 -->
    <article class="subpart subpart9 sectionId">
      <div class="box__content">
        <video autoplay muted loop class="BG_video" id="bgvid">
          <source src="assets/media/videos/transition720p.mp4" type="video/mp4">
        </video>
        <div class="subpart9__main">
          <p class="subpart9__paragraph paragraph">Peu à peu d’autres espèces voient le jour, de nouvelles associations
            se
            créent formant par la suite le plus grand réseau interconnecté de la planète : le <strong>WOOD WIDE
              WEB</strong>.</p>
          <span class="subpart9__next--discover title">Découvrir la suite de l'histoire...</span>
          <span class="subpart9__next title"><span class="subpart9__next--number title">02</span>DES MONDES
            INTERCONNECTÉS</span>
        </div>
      </div>
    </article>

  </section>
















  <!-- CHAPITRE 2 -->
  <!-- <section class="container container--page2">

  </section> -->





<?php
// Timeline
include 'assets/inc/nav_timeline.php';

// Barre de navigation
include 'assets/inc/nav_footer.php';
// Fin de page (scripts)
include 'assets/inc/footer.php';
?>