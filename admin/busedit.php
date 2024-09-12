<?php
include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/header.php';
include '../includes/header.php';
include '../partial/dbconnect.php';

if (isset($_POST['edit_btn'])) {
    $id = $_POST['edit_id'];

    $query = "SELECT * FROM buses WHERE bus_id = '$id'";
    $query_run = mysqli_query($conn, $query);


    foreach ($query_run as $row) {
        ?>
        <!DOCTYPE html>
        <html>

        <head>
            <title>Bus Edit</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        </head>

        <body>
            <style>
                .container {
                    padding-left: 150px;
                    padding-top: 100px;
                }
            </style>
            <div class="container">
                
                <h4 class="my-4">Edit Bus Details</h4>
                <form action="buseditcode.php" method="post" enctype="multipart/form-data">


                    <div class="mb-3">
                        <input type="hidden" name="edit_id" value="<?php echo $row['bus_id'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="busNumber" class="form-label">Bus Number</label>
                        <input type="text" class="form-control" id="busNumber" value="<?php echo $row['bus_number']; ?>"
                            name="bus_number" placeholder="Enter bus number" required>
                    </div>
                    <div class="mb-3">
                        <label for="busDescription" class="form-label">Bus Description</label>
                        <textarea class="form-control" id="busDescription" name="bus_description"
                         placeholder="Enter bus description"><?php echo $row['bus_description']; ?></textarea>

                    </div>
                    <div class="mb-3">
                        <label for="busNumber" class="form-label">Bus Depature Time</label>
                        <input type="text" class="form-control" id="departureTime" name="departure_time"
                            value="<?php echo $row['departure_time']; ?>" placeholder="Enter bus depature time " required>
                    </div>
                    <div class="mb-3">
                        <label for="busNumber" class="form-label">Bus Arrival Time</label>
                        <input type="text" class="form-control" id="reachTime" name="reach_time"
                            value="<?php echo $row['reach_time']; ?>" placeholder="Enter bus arrival time" required>
                    </div>

                    <!-- <div class="mb-3">
                <label for="busType" class="form-label"  value= "<?php echo $row['bus_type']; ?>" >Bus Type</label>
                <select class="form-select" id="busType" name="bus_type" required>
                  <option value="" selected disabled>Select bus type</option>

                  <option value="Deluxe">Deluxe</option>
                  <option value="Tourist">Tourist</option>

                </select>
              </div> -->

                    <!-- <div class="mb-3">
                <label for="Images" class="form-label">Bus Images</label>
                <input type="file" name="bus_image" id="image"  value= "<?php echo $row['bus_image']; ?>" >
              </div> -->
                    <a href="cricket.php" class="btn btn-danger">CANCEL</a>
                    <button name="updatebtn" type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </body>

        </html>
        <?php
    }
}
?>