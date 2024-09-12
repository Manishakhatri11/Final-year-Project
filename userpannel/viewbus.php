<?php

include '../userpannel/setting.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Bus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <style>
        * {
            box-sizing: border-box;
        }

        .container {
            padding-left: 125px;
            padding-top: 100px;

        }

        .card {
            /* width: 33%;
            float: left;
            */
            margin-bottom: 20px;
        }
    </style>

    <div class="container">
        <h2 style="display: block; text-align: center;">List of Buses</h2>
        <div class="row mt-3">


             <?php  
            // require '../partial/dbconnect.php';

            // $query = "SELECT * FROM buses";
            // $query_run = mysqli_query($conn, $query);
            // $check_bus = mysqli_num_rows($query_run) > 0;

            // if ($check_bus) {
            //     while ($row = mysqli_fetch_array($query_run)) {
                    ?>

                    <!-- <div class="col-md-3">
                        <div class="card">
                            <img src="../photoBus/<?php // echo $row['bus_image']; ?> " class="card-img-top" height="200px"
                                width="300px" alt="buspic">
                            <div class="card-body">
                                <h2 class="card-title">
                                    <?php // echo $row['bus_number']; ?>
                                </h2>
                                <p class="card-text">
                                    <?php // echo $row['bus_description']; ?>
                                </p>

                                <form action="/reservation/3a-reservation.php" method="post">
                                    <input type="hidden" name="detail_id" value=" <?php // echo $row['bus_id']; ?>">
                                    <button type="submit" name="detail_btn" class="btn btn-success"> View More</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php






            //     }
            // } else {
            //     echo "No Record Found";
            // }




     ?>
        </div>
    </div> -->


    <div class="sevenpart">
        <footer class="bg-dark text-white text-center py-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4> Smart Bus</h4>
                        <p>
                            Bus Smart is your smart choice for convenient and comfortable bus travel.
                        </p>
                    </div>
                    <div class="col">
                        <h4>Contact</h4>
                        <p>Kathmandu, Boudha City</p>
                        <p>Phone: +977 9818-207687</p>
                    </div>
                    <div class="col">
                        <h4>Email</h4>
                        <p>Email: info@smartbus.com</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>