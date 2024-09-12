<?php
include '../partial/dbconnect.php';
session_start();
$userid = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html>

<head>
  <title>Seat Reservation</title>
  <meta charset="utf-8">
  <script src="3b-reservation.js"></script>
  <link rel="stylesheet" href="3c-reservation.css">
</head>

<body>
<style>
    body {
      background-color: #5EBEC4;
    }


    * {
      box-sizing: border-box;
    }

    body {
      background-color: ;
    }

    .cont {
      width: 100%;
      display: flex;
    }

    .first-box {
      height: auto;
      width: 53%;
      padding-left: 220px;
      padding-top: 120px;
      margin-right: 100px;
    }

    .small-box {
      background-color: white;
      border: 1px solid black;
      text-align: center;
      box-shadow: 13px -5px 41px -9px rgba(0, 0, 0, 0.77);
      -webkit-box-shadow: 13px -5px 41px -9px rgba(0, 0, 0, 0.77);
      -moz-box-shadow: 13px -5px 41px -9px rgba(0, 0, 0, 0.77);
    }

    .second-box {
      background-color: white;
      margin-top: 75px;
      float: right;
      padding: 20px;
      box-shadow: 13px -5px 41px -9px rgba(0, 0, 0, 0.77);
      -webkit-box-shadow: 13px -5px 41px -9px rgba(0, 0, 0, 0.77);
      -moz-box-shadow: 13px -5px 41px -9px rgba(0, 0, 0, 0.77);
    }

    .second-box h3 {
      text-align: center;
    }

    .back {
      margin-top: 20px;
      height: 40px;
    }

    .btn {
      background-color: red;
      text-align: center;
      padding: 15px;
      border-radius: 50px;
      margin-left: 70px;
    }

    .second-box {
      border: 1px solid black;
    }

    #go {
      background: blue;
      border-radius: 59px;
      margin-left: 20px;
    }
  </style>

  <div class="cont">

    <div class="first-box">
      <div class="small-box">
        <?php

        $sql = "SELECT * from buses WHERE bus_id = 157";
        $gotResults = mysqli_query($conn, $sql);

        if ($gotResults) {
          if (mysqli_num_rows($gotResults) > 0) {
            while ($row = mysqli_fetch_array($gotResults)) {
              echo " <h3> Bus Details </h3> ";
              echo "<br>";
              echo "<p>Name: " . $row['bus_number'] . "</p>";
              echo "<p>Description: " . $row['bus_description'] . "</p>";
              echo "<p>Depature Time: " . $row['departure_time'] . "</p>";
              echo "<p>Reach Time: " . $row['reach_time'] . "</p>";
              echo "<p>Pickup Points: " . $row['pickup_points'] . "</p>";
              echo "<p>Route Points: " . $row['route_point'] . "</p>";
              echo "<p>Bus Type: " . $row['bus_type'] . "</p>";
            }
          }
        }
        ?>
      </div>
    </div>
    <div class="second-box">
      <h3>Seats</h3>

      <?php
      // (A) FIXED IDS FOR THIS DEMO
      $sessid = 3;
      $userid; 

      // (B) GET SESSION SEATS
      require "2-reserve-lib.php";
      $seats = $_RSV->get($sessid);
      ?>

      <!-- (C) DRAW SEATS LAYOUT -->
      <div id="layout">
        <?php
        foreach ($seats as $s) {
          $taken = is_numeric($s["user_id"]);
          printf(
            "<div class='seat%s'%s>%s</div>",
            $taken ? " taken" : "",
            $taken ? "" : " onclick='reserve.toggle(this)'",
            $s["seat_id"]
          );
        }
        ?>
      </div>

      <!-- (D) LEGEND -->
      <div id="legend">
        <div class="seat"></div>
        <div class="txt">Open</div>
        <div class="seat taken"></div>
        <div class="txt">Taken</div>
        <div class="seat selected"></div>
        <div class="txt">Your Selected Seats</div>
      </div>

      <!-- (E) SAVE SELECTION -->
      <form id="ninja" method="post" action="4-save.php">
        <input type="hidden" name="sessid" value="<?= $sessid ?>">
        <input type="hidden" name="userid" value="<?= $userid ?>">
      </form>
      <button id="go" onclick="reserve.save()">Buy Seats</button>
      <button class="btn" onclick="history.back()">Go Back</button>
    </div>
  </div>
</body>

</html>