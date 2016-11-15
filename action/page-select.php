<?php
$home = "home";
$events = "events";

if (isset($_GET["p"])) {
  $page_select = $_GET['p'];
} else {
  $page_select = 1;
}

switch($page_select) {
  case '': require_once "index.php"; break;
  case $home: require_once "pages/home.php"; break;
  case $events: require_once "pages/events.php"; break;
  default: require_once('pages/home.php');
}
?>
