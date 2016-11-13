<?php $title = 'Result'; require('./partials/head.php');
  $object = $_GET['object'];
  #echo $object;

  include 'data.php';

  $check = false;
  if ($products["$object"]) {
    #echo "yes";
    $check = true;

    switch ($products["$object"]) {
      case 1:
        $image = "paper";
        $text = "CARTA";
        break;
      case 2:
        $image = "rest";
        $text = "INDIFFERENZIATA";
        break;
      case 3:
        $image = "glass";
        $text = "VETRO";
        break;
      case 4:
        $image = "organic";
        $text = "ORGANICO";
        break;
    }
  }
  else {
    echo "no";
  }
?>

<div class="response-page plastic">
  <div class="navbar">
    <?php require('./partials/header.php'); ?>
    <form action="/result.php" method="get" class="search-bar">
      <input type="text" name="object" placeholder="Ricicla ora..">
      <input type="image" src="/assets/images/action-icon.svg" alt="Ricicla">
    </form>
  </div>

  <div id="response" class="lets-move pop-up-2s">
    <figure>
      <img src="/assets/images/bin-<?=$image ?>.png" alt="Ricicla come plastica">
    </figure>
    <article>
      <h4>Ricicla come</h4>
      <h2><?=$text ?></h2>
    </article>
  </div>
</div>

<?php require('./partials/tail.php'); ?>
