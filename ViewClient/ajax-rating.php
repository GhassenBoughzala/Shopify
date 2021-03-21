<?php
// INIT
require "../config.php";
require "lib-rating.php";
session_start();
$rate = new Rating();

// DUMMY USER SESSION
// REMOVE THIS IN YOUR OWN SYSTEM...

// HANDLE AJAX REQUESTS
switch ($_POST['req']) {
  /* [INVALID REQUEST] */
  default:
    echo "Invalid request";
    break;

  /* [SAVE RATING] */
  case "save":
    echo $rate->save($_POST['Sujet'],$_POST['commentaire'], $_POST['rating'],$_SESSION['l']);
    break;
}
?>