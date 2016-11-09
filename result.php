<?php $title = 'Result'; require('./partials/head.php'); ?>

<div class="response-page plastic">
  <div class="navbar">
    <header>
      <a href="/">
        <img src="/assets/images/logo.svg" alt="DoveLoButto">
        <span>DoveLoButto</span>
      </a>
    </header>
    <form action="/result.php" method="get">
      <input type="text" name="object">
      <input type="submit" value="Submit">
    </form>
  </div>

  <div id="response" class="lets-move pop-up-2s">
    <figure>
      <img src="/assets/images/bin-plastic.png" alt="Ricicla come plastica">
    </figure>
    <article>
      <h4>Ricicla come</h4>
      <h2>Plastica</h2>
    </article>
  </div>
</div>

<?php require('./partials/tail.php'); ?>
