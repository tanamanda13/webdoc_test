<section class="container container--page1">
  <!-- HERO -->
  <article class="subpart container hero sectionId">
    <div class="box__content">
      <video autoplay  loop class="BG_video" id="bgvid">
      <source src="assets/media/videos/Trailer_fungi.mp4" type="video/mp4">
      </video>
      <h1 class="hero__title title">LA VIE SECRÈTE DES CHAMPIGNONS<br><hr></h1>
      <div class="hero__skips">
        <span class="hero__skip subtitle skip">PASSER L'INTRODUCTION
        <svg class="icon__skip" aria-hidden="true">
          <use xlink:href="#icon__skip"></use>
        </svg></span>
      </div>

    </div>
    </article>
    
  <!-- SOUS-PARTIE 1 -->
  <article class="subpart subpart1 sectionId" id="chapter1-1">
    <div class="box__content">
      <video autoplay  loop class="BG_video" id="bgvid">
        <source src="assets/media/videos/Mycelium_background_NB.mp4" type="video/mp4">
      </video>
      </div>
      <div class="subpart1__main">
        <h1 class="subpart1__title title">LE RÔLE DES CHAMPIGNONS DANS<br> L'EVOLUTION DE LA VIE <br> TERRESTRE</h1>
        <span class="subpart1__number title">01</span>
        <a class="subpart1__scroll title" href="#chapter1">SCROLL</a>
      </div>

    </div>
  </article>

  <!-- SOUS-PARTIE 2 -->
  <article class="subpart subpart2 sectionId" id="chapter1">
    <div class="box__content">
      <div class="subpart2__main">
        <h3 class="subpart2__subtitle subtitle">FIN DE LA GRANDE PÉRIODE GLACIÈRE</h3>
        <h2 class="subpart2__title title">DE LA ROCHE <br>
          <hr> À LA TERRE
        </h2>

        <?php $text = $pdo->query('SELECT description FROM article WHERE id = "2"');
        $paragraphe = $text->fetch(); ?>

        <p class="subpart2__paragraph paragraph"><?php echo $paragraphe['description'] ?></p>
        <img class="subpart2__image" src="assets/media/subpart2.png" />
      </div>
      <audio class="audio" id="audio-player" src="assets/media/audios/rocheTerre.mp3"></audio>
      <?php include 'assets/inc/tooltips1.php' ?>
    </div>
  </article>

  <!-- SOUS-PARTIE 3 -->
  <article class="subpart subpart3 sectionId">
    <div class="box__content">
      <video autoplay  class="BG_video" id="bgvid">
        <source src="assets/media/videos/vid_01.mp4" type="video/mp4">
      </video>
      <div class="subpart3__main">
      </div>
    </div>
  </article>

  <!-- SOUS-PARTIE 4 -->
  <article class="subpart subpart4 sectionId">
    <div class="box__content">
      <video autoplay  loop class="BG_video--circle" id="bgvid">
        <source src="assets/media/videos/BBBcircle.mp4" type="video/mp4">
      </video>
      <div class="subpart4__main">
        <h3 class="subpart4__subtitle subtitle">PROTÉROZOIQUE TARDIF</h3>
        <h2 class="subpart4__title title">LE BIG BANG <br>
          <hr> BIOLOGIQUE
        </h2>

        <?php $text = $pdo->query('SELECT description FROM article WHERE id = "3"');
        $paragraphe = $text->fetch(); ?>

        <p class="subpart4__paragraph paragraph"><?php echo $paragraphe['description']  ?></p>
        <audio class="audio" id="audio-player" src="assets/media/audios/bbb.mp3"></audio>
      </div>
      <div><?php include 'assets/inc/tooltips2.php' ?>
      </div>
      <div><?php include 'assets/inc/tooltips3.php' ?></div>
    </div>
  </article>

  <!-- SOUS-PARTIE 5 -->
  <article class="subpart subpart5 sectionId">
    <div class="box__content">
      <video autoplay  loop class="BG_video" id="bgvid">
        <source src="assets/media/videos/Blob_1.mp4" type="video/mp4">
      </video>
      <div class="subpart5__main">
        <h2 class="subpart5__keyfigures1 keyfigures1"><span class="keyfigures1--">LES CHAMPIGNONS</span><br> TROISIÈME
          FORME DE VIE SUR TERRE
        </h2>

        <div class="container__animation">
          <div class="container___animation--sub">
            <!--<h3 class="subpart5__keyfigures2 keyfigures2">80%</h3>
            <h4 class="subpart5__keyfigures3 keyfigures3">DE LA BIOMASSE TERRESTRE</h4>-->
            <p class="text__up--1">80%</p>
            <p class="text__up text__up--2">DE LA BIOMASSE TERRESTRE</P>
         
            <!--<h3 class="subpart5__keyfigures2 keyfigures2">100</h3>
            <h4 class="subpart5__keyfigures3 keyfigures3">ESPÈCES DIFFÉRENTES À CHAQUE INSPIRATION</h4>-->
            <p class="text__up--3">PLUS DE</p>
            <p class="text__up--1">100</p>
            <p class="text__up text__up--3">ESPÈCES DIFFÉRENTES À CHAQUE INSPIRATION</p>
          
            <!--<h3>SEULEMENT 1% ESPÈCES CONNUES SUR PLUS DE </h3>
            <h3 class="subpart5__keyfigures2 keyfigures2">5 000 000</h3>-->
            <p class="text__up text__up--4">SEULEMENT 1% ESPÈCES CONNUES SUR PLUS DE </p>
            <p class="text__up--5">5 000 000</p>
          </div>
        </div>
      </div>
      <div><?php include 'assets/inc/tooltipsBlob.php' ?></div>
    </div>
  </article>

  <!-- SOUS-PARTIE 6 -->
  <article class="subpart subpart6 sectionId">
    <div class="box__content">
      <video autoplay  loop class="BG_video--triangle" id="bgvid">
        <source src="assets/media/videos/Growing_plants2.mp4" type="video/mp4">
      </video>
      <div class="subpart6__main">
        <h3 class="subpart6__subtitle subtitle">ORDOVICIEN TARDIF</h3>
        <h2 class="subpart6__title title">L’EXPANSION DE LA
          <br>
          <hr> VIE TERRESTRE
        </h2>

        <?php $text = $pdo->query('SELECT description FROM article WHERE id = "4"');
        $paragraphe = $text->fetch(); ?>

        <p class="subpart6__paragraph paragraph"><?php echo $paragraphe['description']  ?></p>
      </div>
      <audio class="audio" id="audio-player" src="assets/media/audios/expansionVie.mp3"></audio>
    </div>
  </article>

  <!-- SOUS-PARTIE 7 -->
  <article class="subpart subpart7 sectionId">
    <div class="box__content">
      <video autoplay  class="BG_video" id="bgvid">
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

        <?php $text = $pdo->query('SELECT description FROM article WHERE id = "5"');
        $paragraphe = $text->fetch(); ?>

        <p class="subpart8__paragraph paragraph"><?php echo $paragraphe['description']  ?></p>
        <img class="subpart8__image" src="assets/media/t-rex.png" />
        <img class="subpart8__image--2" src="assets/media/meteors.png" />
      </div>
      <audio class="audio" id="audio-player" src="assets/media/audios/ereNouvelle.mp3"></audio>
      <div><?php include 'assets/inc/tooltips4.php' ?></div>
      <div><?php include 'assets/inc/tooltips5.php' ?></div>
      <div><?php include 'assets/inc/tooltips6.php' ?></div>
    </div>
  </article>

  <!-- SOUS-PARTIE 9 -->
  <article class="subpart subpart9 sectionId">
    <div class="box__content">
      <video autoplay  loop class="BG_video" id="bgvid">
        <source src="assets/media/videos/transition720p.mp4" type="video/mp4">
      </video>
      <div class="subpart9__main">
        <p class="subpart9__paragraph paragraph">Peu à peu d’autres espèces voient le jour, de nouvelles associations se créent formant par la suite le plus grand réseau interconnecté de la planète : le <strong>WOOD WIDE WEB</strong>.</p>
        <span class="subpart9__next--discover title">Découvrir la suite de l'histoire...</span>
        <a class="subpart9__next title" href="index2.php"><span class="subpart9__next--number title">02</span>DES MONDES
          INTERCONNECTÉS</a>
      </div>
    </div>
  </article>

</section>