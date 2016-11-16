<?php
  $object = $_GET['object'];
  #echo $object;

  include_once('data.php');

  $check = false;
  if (isset($products["$object"])) {
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
    $data = [
      'text' => "$text",
      'image' => "$image",
    ];

    echo json_encode($data);
  }
  else {
    $data = [
      'text' => "$object",
      'image' => "no",
    ];
    echo json_encode($data);
  }
