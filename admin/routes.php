<?php
// include '../includes/header.php';
// include '../includes/navbar.php';
// include '../includes/header.php';
// include '../includes/script.php';



// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Retrieve the form data

//     $pickupPoint = $_POST["pickup_point"];
//     $busNumber = $_POST["bus_number"];
//     $routePoint = $_POST["route_point"];

//     // Insert the data into the database
//     include '../partial/dbconnect.php';

//     // Check if the bus_number already exists
//     $checkSql = "SELECT * FROM routes WHERE bus_number = '$busNumber'";
//     $checkResult = mysqli_query($conn, $checkSql);
//     if (mysqli_num_rows($checkResult) > 0) {
//         echo "Error: Bus number already exists!";
//     } else {
//         $sql = "INSERT INTO routes ( pickup_point, bus_number, route_point) VALUES ( '$pickupPoint', '$busNumber', '$routePoint')";
//         $result = mysqli_query($conn, $sql);

//         if ($result) {
//             echo "Data inserted successfully!";
//         } else {
//             echo "Error: " . mysqli_error($conn);
//         }
//     }

//     mysqli_close($conn);
// }
?>




<!-- 

<!DOCTYPE html>
<html>
<head>
    <title>Bus Route Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<style>
        .container {
            padding-left: 125px;
            padding-top: 100px;

        }
    </style>

    <div class="container">
        <h1>Add Bus Route</h1>
        <form action="routes.php" method="post"  >
          
            <div class="mb-3">
                <label for="pickup_point" class="form-label">Pickup Point</label>
                <input type="text" class="form-control" id="pickup_point" name="pickup_point" required>
            </div>
            <div class="mb-3">
                <label for="bus_id" class="form-label">Bus Number</label>
                <input type="text" class="form-control" id="bus_number" name="bus_number" required>
            </div>
            <div class="mb-3">
                <label for="route_point" class="form-label">Route Point</label>
                <input type="text" class="form-control" id="route_point" name="route_point" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Bus Route</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> -->




<?php
 session_start();
 include '../includes/header.php';
 include '../includes/navbar.php';
 include '../includes/header.php';
 include '../includes/script.php';
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $pickupPoint = $_POST["pickup_point"];
    $routePoint = $_POST["route_point"];
    $busNumber = $_POST["bus_number"];
    include '../partial/dbconnect.php';

    // Check if the bus number already exists
    $checkBusSql = "SELECT * FROM buses WHERE bus_number = '$busNumber'";
    $checkBusResult = mysqli_query($conn, $checkBusSql);

    if (mysqli_num_rows($checkBusResult) > 0) {
        echo "Error: Bus number already exists!";
    } else {
        // Insert into routes table
        $sql = "INSERT INTO routes (pickup_point, route_point) VALUES ('$pickupPoint', '$routePoint')";
        $result = mysqli_query($conn, $sql);

        // Insert into buses table
        $sqlBus = "INSERT INTO buses (bus_number) VALUES ('$busNumber')";
        $resultBus = mysqli_query($conn, $sqlBus);

        if ($result && $resultBus) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    
}

    

?>





<!DOCTYPE html>
<html>
<head>
  <title>Bus Route Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<style>
        .container {
            padding-left: 150px;
            padding-top: 100px;

        }
    </style>

  <div class="container">






    <h2>Add Bus Route </h2>
    <form action="routes.php" method="post"  >
    
      <div class="mb-3">
        <label for="pickup_point" class="form-label">Pickup Point</label>
        <input type="text" class="form-control" id="pickup_point" name="pickup_point" required>
      </div>
      <div class="mb-3">
        <label for="bus_number" class="form-label">Bus Number</label>
        <input type="text" class="form-control" id="busNnumber" name="bus_number" required>
      </div>
      <div class="mb-3">
        <label for="route_point" class="form-label">Route Point</label>
        <textarea class="form-control" id="route_point" name="route_point" rows="3" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Add Bus Route</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

