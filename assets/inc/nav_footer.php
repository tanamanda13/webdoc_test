<nav class="nav__footer footer">
  <div class="footer__items">
    <div class="footer__grp">
      <li class="footer__item">
        <a href="index.php">
          ACCUEIL
        </a>
      </li>
    </div>
    <div class="footer__grp">
    <svg class="social__icon" aria-hidden="true">
        <use xlink:href="#icon__facebook"></use>
      </svg>
      <svg class="social__icon" aria-hidden="true">
        <use xlink:href="#icon__twitter"></use>
      </svg>
    <?php if(isConnected()): ?>
      <li class="footer__item">
        <a href="login.php?logout">
          DÉCONNEXION
        </a>
      </li>
      <?php if (getUserInfo('type') === 'admin'): ?>
      <li class="footer__item">
        <a href="admin/">
          BACK-OFFICE
        </a>
      </li>
      <?php endif; ?>
      <?php else: ?> 
        <li class="footer__item">
          <a href="login.php">
            CONNEXION
          </a>
        </li>
      <?php endif; ?>
      <a href="about.php">
      <li class="footer__item">A PROPOS</li>
      </a>
      <div class="buttons">
        <button class="button prev">prev</button>
        <button class="button next">next</button>
      </div>
    </div>
  </div>
</nav>

