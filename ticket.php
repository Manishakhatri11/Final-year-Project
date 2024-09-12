<?php

include 'partial/dbconnect.php';
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ticket Page</title>
  <link href="ticket page.css" rel="stylesheet">
</head>

<body>
  <script>
    function prnt() {
      window.print();

    }
  </script>
  <div class="container_ticket">
    <h1 class="mainhead"><b><u>TICKET</u></b></h1>

    <?php
    $currentUser = $_SESSION['username'];
    $sql = "SELECT * FROM users WHERE username = '$currentUser' ";

    $gotResults = mysqli_query($conn, $sql);

    if ($gotResults) {
      if (mysqli_num_rows($gotResults) > 0) {
        while ($row = mysqli_fetch_array($gotResults)) {
          // print_r($row);
          ?>
          <div class="card">
            <div class="card-body">
              <!-- Display user's profile information -->
              <p>Name:
                <?php echo $row['username']; ?>
              <p>Email:
                <?php echo $row['email']; ?>
              </p>
              <p>Phone:
                <?php echo $row['phone']; ?> 
              </p>
              <p>Bus Number:
                <?php echo $row['bus_number']; ?>
              </p>
            </div>
          </div>

          <?php
        }

      }
    }


    ?>



<!-- 


    <br><br>
    Date of Journey: <input type="text" value="<?php // print($_SESSION['dt']) ?>" readonly>
    <br><br>
    Head Count: <input type="text" value="<?php // print($_SESSION['hdcunt']) ?>" readonly>
    <br><br>
    Bus Name: <input type="text" value="<?php // print($_SESSION['bsnm']) ?>" readonly>
    <br><br>
    From: <input type="text" value="<?php // print($_SESSION['frm']) ?>" readonly>
    <br><br>
    To: <input type="text" value="<?php // print($_SESSION['to']) ?>" readonly>
    <br><br>
    Fare: <input type="number" value="<?php // print(($_SESSION['fph']) * ($_SESSION['hdcunt'])) ?>" readonly>
    <br><br>
  </div>
  <input type="button" value="print" onclick="prnt()"> -->
</body>

</html>