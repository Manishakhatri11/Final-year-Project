<?php
 session_start();
 include '../includes/header.php';
 include '../includes/navbar.php';
 include '../includes/header.php';
 include '../includes/script.php';
 
$showSuccess = false;
$showError = false;

// Check if the form is submitted


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $busNumber = $_POST["bus_number"];
  $busDescription = $_POST["bus_description"];
  $departureTime = $_POST["departure_time"];
  $reachTime = $_POST["reach_time"];
  $busType = $_POST["bus_type"];

  $target_dir = "../photoBus/";
  $target_file = $target_dir . basename($_FILES["bus_image"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["bus_image"]["tmp_name"]);
    if ($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    // echo " Sorry, file already exists.";
    $showError = true;
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["bus_image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    // echo " Sorry, your file was not uploaded.";
    $showError = true;
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["bus_image"]["tmp_name"], $target_file)) {
      include '../partial/dbconnect.php';

      // Insert bus details and image filename into the database
      $sql = "INSERT INTO buses (bus_number, bus_description, departure_time, reach_time, bus_type, bus_image) 
                    VALUES ('$busNumber', '$busDescription', '$departureTime', '$reachTime', '$busType', '" . basename($_FILES["bus_image"]["name"]) . "')";
      $result = mysqli_query($conn, $sql);
      mysqli_close($conn);

      if ($result) {
        // echo "<script>alert('Data Inserted Successfully!');</script>"; 
        $showSuccess = true;
      } else {
        echo " Error: " . mysqli_error($conn);
      }
    } else {
      echo " <script> alert('Sorry, there was an error uploading your file.'); </script>";
    }
  }
}
?>

















<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Add Bus </title>
</head>

<body>
  <style>
    .container {
      padding-left: 150px;
      padding-top: 100px;

    }
  </style>
  <div class="container">
    <?php
    if ($showSuccess)
      echo '  <div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>Success Data Entry</strong> </div> ';

    if ($showError)
      echo '  <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorry, Your file is already exist! Your file was not Uploaded.</strong> </div> ';

    ?>

    <form action="" method="post">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        ADD BUS
      </button>
    </form>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Bus</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form action="buses.php" method="post" enctype="multipart/form-data">

              <div class="mb-3">
                <label for="busNumber" class="form-label">Bus Number</label>
                <input type="text" class="form-control" id="busNumber" name="bus_number" placeholder="Enter bus number"
                  required>
              </div>
              <div class="mb-3">
                <label for="busDescription" class="form-label">Bus Description</label>
                <textarea class="form-control" id="busDescription" name="bus_description"
                  placeholder="Enter bus description" required></textarea>
              </div>
              <div class="mb-3">
                <label for="busNumber" class="form-label">Bus Depature Time</label>
                <input type="text" class="form-control" id="departureTime" name="departure_time"
                  placeholder="Enter bus depature time " required>
              </div>
              <div class="mb-3">
                <label for="busNumber" class="form-label">Bus Arrival Time</label>
                <input type="text" class="form-control" id="reachTime" name="reach_time"
                  placeholder="Enter bus arrival time" required>
              </div>
              <div class="mb-3">
                <label for="busNumber" class="form-label">Bus Pickup Points</label>
                <input type="text" class="form-control" id="pickuppoints" name="pickup_points"
                  placeholder="Enter bus pickup point" required>
              </div>
              <div class="mb-3">
                <label for="busNumber" class="form-label">Bus Route Points</label>
                <input type="text" class="form-control" id="routePoints" name="route_point"
                  placeholder="Enter bus route point" required>
              </div>

              <div class="mb-3">
                <label for="busType" class="form-label">Bus Type</label>
                <select class="form-select" id="busType" name="bus_type" required>
                  <option value="" selected disabled>Select bus type</option>

                  <option value="Deluxe">Deluxe</option>
                  <option value="Tourist">Tourist</option>

                </select>
              </div>

              <div class="mb-3">
                <label for="Images" class="form-label">Bus Images</label>
                <input type="file" name="bus_image" id="image">
              </div>
              <button type="submit" class="btn btn-primary">Add Bus</button>
            </form>


          </div>
        </div>

      </div>

    </div>

    <h2 style="display: block; text-align: center;   ">List of Buses</h2>


    <?php
    require '../partial/dbconnect.php';



    $query = "SELECT *FROM buses ";
    $query_run = mysqli_query($conn, $query);

    ?>



    <table class="table ">
      <thead>
        <tr>
          <th scope="col">S,No</th>
          <th scope="col">Bus Number</th>
          <th scope="col">Bus Descritpion</th>
          <th scope="col">Depature Time</th>
          <th scope="col">Reach Time</th>
          <th scope="col">Bus Pickup Point </th>
          <th scope="col">Bus Route Point</th>
          <th scope="col">Bus Image </th>
          <th scope="col">Bus Type </th>
          <th scope="col">Update</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (mysqli_num_rows($query_run) > 0) {
          while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
            <tr>

              <td>
                <?php echo $row['bus_id']; ?>
              </td>
              <td>
                <?php echo $row['bus_number']; ?>
              </td>
              <td>
                <?php echo $row['bus_description']; ?>
              </td>
              <td>
                <?php echo $row['departure_time']; ?>
              </td>
              <td>
                <?php echo $row['reach_time']; ?>
              </td>
              <td>
                <?php echo $row['pickup_points']; ?>
              </td>
              <td>
                <?php echo $row['route_point']; ?>
              </td>
              <td>
                <img src="../photobus/<?php echo $row['bus_image']; ?>" height="100px" width="100px" alt="bus.pic">
              </td>
              <td>
                <?php echo $row['bus_type']; ?>
              </td>
              <td>


                <!-- Button trigger modal -->
                <form action="busedit.php" method="post">
                  <input type="hidden" name="edit_id" value=" <?php echo $row['bus_id']; ?>">
                  <button type="submit" name="edit_btn" class="btn btn-success"> Edit</button>
                </form>
              </td>
              <td>

                <form action="busdelete.php" method="post">

                  <input type="hidden" name="delete_id" value=" <?php echo $row['bus_id']; ?>    ">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> Delete</button>
                </form>

              </td>
            </tr>

            <?php
            // echo $row['id'];
// echo $row['name'];
// echo $row['contact'];
          }
        } else {
          echo "No record found";
        }

        ?>
      </tbody>
    </table>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>