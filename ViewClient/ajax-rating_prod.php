<?php
// INIT
require "../config.php";
require "lib-rating_prod.php";
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
    echo $rate->save($_POST['idp'], $_POST['rating'],$_SESSION['l']);
    break;
}
?>