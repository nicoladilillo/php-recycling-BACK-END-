<?php $title = 'DoveLoButto'; require('./partials/head.php'); ?>

<div class="action-box">
  <article>
    <p>Riciclare non è mai stato così facile..</p>
  </article>
  <form action="/result.php" method="get" class="search-bar">
    <input type="text" name="object" placeholder="Ricicla ora">
    <input type="image" src="/assets/images/action-icon.svg" alt="Ricicla">
  </form>
</div>

<?php require('./partials/tail.php'); ?>
