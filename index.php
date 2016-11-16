<?php $title = 'DoveLoButto'; require('./partials/head.php'); ?>

<div class="homepage">
  <div class="navbar">
    <?php require('./partials/header.php'); ?>
  </div>

  <div class="sidebar is-serif">
      <article>
        <p>
          <strong>DoveLoButto</strong> ti permette di scoprire velocemente e
          facilmente come riciclare tutto ciò che ti passa per le mani.
        </p>
        <p>
          La raccolta differenziata non è facile come sembra e questo servizio
          nasce apposta per facilitarla, fornendo alle persone uno strumento
          utile e facile da usare.
        </p>
      </article>
    </div>

  <div class="action-box">
      <article>
        <p>Riciclare non è mai stato così facile..</p>
      </article>
      <form action="result.php" method="GET" class="search-bar" id="resultForm">
        <input type="text" name="object" placeholder="Ricicla ora">
        <input type="submit" src="/assets/images/action-icon.svg" alt="Ricicla">
      </form>
    </div>
</div>

<div class="result" style="display:none;">

  <div class="navbar">
    <?php require('./partials/header.php'); ?>
    <form action="/result.php" method="get" class="search-bar">
      <input type="text" name="object" placeholder="Ricicla ora..">
      <input type="image" src="/assets/images/action-icon.svg" alt="Ricicla">
    </form>
  </div>

  <div class="response-page">
    <div id="response" class="lets-move pop-up-2s">
      <figure>
        <img alt="Ricicla come plastica" class="icon">
      </figure>
      <article>
        <h4>Ricicla come</h4>
        <h2></h2>
      </article>
    </div>
  </div>
</div>

<div class="email" style="display:none;">

  <div class="navbar">
    <?php require('./partials/header.php'); ?>
    <form action="/result.php" method="get" class="search-bar">
      <input type="text" name="object" placeholder="Ricicla ora..">
      <input type="image" src="/assets/images/action-icon.svg" alt="Ricicla">
    </form>
  </div>

  <div class="response-page">
    <div id="response" class="lets-move pop-up-2s">
      <form action=".">
        <article>
          <input type="email" name="email" placeholder="e-mail">
        </article>
      </form>
    </div>
  </div>
</div>

</div>

<?php require('./partials/tail.php'); ?>
