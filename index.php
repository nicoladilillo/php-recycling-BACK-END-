<?php $title = 'DoveLoButto'; require('./partials/head.php'); ?>

<p>CSS is <b id="not">not</b> working</p>
<p>JS is <b id="js-not">not</b> working</p>

<hr>

<form action="/result.php" method="GET">
  Oggetto da riciclare
  <input type="text" name="object">
  <input type="submit" value="Submit">
</form>

<?php require('./partials/tail.php'); ?>
