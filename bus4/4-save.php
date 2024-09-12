<?php
// (A) LOAD LIBRARY
require "2-reserve-lib.php";

// (B) SAVE
$_RSV->save($_POST["sessid"], $_POST["userid"], $_POST["seats"]);
echo "You have successfully buy your ticket";
echo "";
?>

<a href="ticket4.php">View Your Ticket</a>