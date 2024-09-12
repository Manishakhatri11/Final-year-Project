<?php

include '../userpannel/setting.php';
include '../partial/dbconnect.php';
?>


<!DOCTYPE html>
<html>

<head>
  <title>User Profile Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
  <style>
    .container {
      margin-top: 100px;
      margin-left: 237px;

      /* width: auto; */
      padding-left: 26px;
      padding-top: 30px;
      /* border: 1px solid black; */
    }
  </style>

  <div class="container">
       <div class="row">
      <div class="col-md-6 offset-3">
        <form action="useredit.php">
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
                  <div class="card-header">
                    Profile Information
                  </div>
                  <div class="card-body">
                    <!-- Display user's profile information -->
                     <p>Name:  <?php echo $row['username']; ?> <!-- <input type="text" name="edit_username" class="form-control"  value="<?php // echo $row['username']; ?>"></p> -->
                    <p>Email: <?php echo $row['email']; ?>   <!-- <input type="email" name="edit_email" class="form-control" value="<?php // echo $row['email']; ?>"> -->
                    </p>
                   <p>Phone: <?php echo $row['phone']; ?>   <!-- <input type="text" name="edit_phone" class="form-control" value=""> -->
                    </p>
                    <p> <?php  // echo $row['user_id']; ?> </p>
                    <!-- <form action="user.php">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['user_id']; ?>">
                                     <button type="submit" name="updatebtn" class="btn btn-primary"> Book Now </button>
                                     </form> -->
                  </div>
                </div>

                <?php
              }

            }
          }


          ?>

        </form>
      </div>
    </div>



  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>