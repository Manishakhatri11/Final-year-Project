<?php

include '../userinclude/header.php';
include '../userinclude/navbar.php';
include '../userinclude/footer.php';
include '../userinclude/script.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Routes</title>
</head>

<body>
    <style>
        .container {
            padding-left: 125px;
            padding-top: 100px;

        }
    </style>

    <div class="container">
        <h2 style="display: block; text-align: center;   ">List of Buses Routes</h2>


        <?php
        require '../partial/dbconnect.php';



        $query = "SELECT *FROM routes ";
        $query_run = mysqli_query($conn, $query);

        
        $queryBus = "SELECT *FROM buses ";
        $queryBus_run = mysqli_query($conn, $queryBus);



        ?>


        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">Bus number</th>
                    <th scope="col">Bus Pickpup Point </th>
                    <th scope="col">Bus Departure </th>
                    <th scope="col">Bus Route Point</th>
                    <th scope="col">Bus Reach Time </th>
                  
                   

                </tr>
            </thead>
            <tbody>
            <?php
        if (mysqli_num_rows($query_run) > 0 && mysqli_num_rows($queryBus_run) > 0) {
            while (($row = mysqli_fetch_assoc($query_run)) && ($rowBus = mysqli_fetch_assoc($queryBus_run))) {
                ?>
                        <tr>

                            <td>
                                <?php echo $rowBus['bus_number']; ?>
                            </td>
                            <td>
                                <?php echo $row['pickup_point']; ?>
                            </td>
                            <td>
                                <?php echo $rowBus['departure_time']; ?>
                            </td>
                            <td>
                                <?php echo $row['route_point']; ?>
                            </td>
                            <td>
                                <?php echo $rowBus['reach_time']; ?>
                            </td>
                           
                        
                        </tr>

                        <?php
                        }
                } else {
                    echo "No record found";
                }

                ?>
            </tbody>
        </table>
    </div>


</body>

</html>