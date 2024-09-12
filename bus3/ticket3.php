<?php

session_start();
include '../partial/dbconnect.php';

$userid = $_SESSION['user_id'];
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

    <style>
        *{
            box-sizing: border-box;
        }
        .last {
            display: flex;
            margin-left: 5px;
        }

        .print {
            margin-left: 50px;
        }

        .cancel {
           
            margin-left: 30px;
        }
            .homepage {
                margin-top: 10px;
            }
        .container_ticket {
            border: 2px solid black;
            margin-left: 500px;
            margin-top: 40px;
            width: 300px;
            text-align: center;
            box-shadow: 13px -5px 41px -9px rgba(0, 0, 0, 0.77);
            -webkit-box-shadow: 13px -5px 41px -9px rgba(0, 0, 0, 0.77);
            -moz-box-shadow: 13px -5px 41px -9px rgba(0, 0, 0, 0.77);

        }
        .btn-cancel {
            background-color: red;
            padding: 15px;
             border-radius: 50px;
             color: white;
             font-size: 16px;
        }
        .print-btn {
            background-color: green;
            padding: 15px;
             border-radius: 50px;
             color: white;
             font-size: 16px;
        }
        @media print {

            .print-btn,
            .cancel,
            .homepage {
                display: none;
            }
        }
    </style>

    <div class="container_ticket">
        <h1 class="mainhead"><b><u>Your Ticket</u></b></h1>

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
                        </div>
                    </div>

                    <?php
                }
            }
        }
        ?>
        <?php

        $sql = "SELECT * from buses WHERE bus_id = 157";
        $gotResults = mysqli_query($conn, $sql);

        if ($gotResults) {
            if (mysqli_num_rows($gotResults) > 0) {
                while ($row = mysqli_fetch_array($gotResults)) {
                    echo "<p>Bus Name: " . $row['bus_number'] . "</p>";
                    echo "<p>Depature Time: " . $row['departure_time'] . "</p>";
                    echo "<p>Reach Time: " . $row['reach_time'] . "</p>";
                    echo "<p>Pickup Points: " . $row['pickup_points'] . "</p>";
                    echo "<p>Route Points: " . $row['route_point'] . "</p>";
                    echo "<p>Bus Type: " . $row['bus_type'] . "</p>";
                }
            }
        }
        ?>

        <?php
        $sql = "SELECT * FROM reservation2 WHERE user_id = '$userid'";
        $gotResult = mysqli_query($conn, $sql);

        if ($gotResult) {
            if (mysqli_num_rows($gotResult) > 0) {
                while ($row = mysqli_fetch_array($gotResult)) {
                    echo "<p>Your Ticket Number: " . $row['seat_id'] . "</p>";
                }
            }
        }
        ?>

        <div class="last">
            <!-- <form action="ticket-delete.php" method="post"> -->
                <!-- <input type="hidden" name="delete_id" value=" <?php  // echo $row['user_id']; ?>    "> -->
                <!-- <button type="submit" name="delete_btn" class="btn btn-danger"> Delete</button>
            </form> -->
            <div class="print">
                <button onclick="window.print();" class="print-btn"> Print</button>
            </div>
        </div>

        <div class="homepage">
            <a href="../userpannel/user.php"
                onclick="return confirm('Are you sure you want to go back to the home page? To see your Ticket details call amdin.')">Go back to home page</a>
        </div>
    </div>

</body>

</html>