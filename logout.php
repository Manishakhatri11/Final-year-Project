<?php
// session_start();
// unset($_SESSION["id"]);
// unset($_SESSION["name"]);
// header("Location: login.php");


session_start();

session_unset();
// session_destroy();

header("location: index.php");
  // exit;
?>