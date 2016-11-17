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
      <form action="result.php" method="GET" class="search-bar indexForm" id="resultForm">
        <input type="text" name="object" placeholder="Ricicla ora">
        <input type="submit" src="/assets/images/action-icon.svg" alt="Ricicla" >
      </form>
      <ul class="autocomplete">
      </ul>
    </div>
</div>

<div class="result" style="display:none;">

  <div class="navbar">
    <?php require('./partials/header.php'); ?>
    <form action="result.php" method="GET" class="search-bar indexForm" >
      <input type="text" name="object" placeholder="Ricicla ora">
      <input type="submit" src="/assets/images/action-icon.svg" alt="Ricicla" >
    </form>
    <ul class="autocomplete">
    </ul>
  </div>

  <div class="response-page bin" style="display:none;">
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

  <div class="response-page email" style="display:none;">
    <div id="response" class="lets-move pop-up-2s">
      <article>
        <h4></h4>
        <form action=".">
          <input type="email" name="email" placeholder="e-mail">
        </form>
      </article>
    </div>
  </div>

</div>

<?php require('./partials/tail.php'); ?>
