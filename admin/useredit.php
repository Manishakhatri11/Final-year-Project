<?php
include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/header.php';
include '../includes/header.php';
include '../partial/dbconnect.php';

if (isset($_POST['edit_btn'])) {
    $id = $_POST['edit_id'];

    $query = "SELECT * FROM users WHERE user_id = '$id'";
    $query_run = mysqli_query($conn, $query);
  

    foreach ($query_run as $row) {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>User Edit</title>
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
                <h4 class="my-4">Edit Customer Details</h4>
                <form action="usereditcode.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['user_id'] ?>">
                    <div class="form-group">
                        <label for="name">User Name</label>
                        <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Phone Number</label>
                        <input type="text" name="edit_phone" value="<?php echo $row['phone'] ?>" class="form-control" id="lastName" placeholder="Enter your last name">
                    </div>
                    <div class="form-group">
                        <label for="number">Email</label>
                        <input type="text" name="edit_email" class="form-control" id="email" value="<?php echo $row['email'] ?>" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="number">Password</label>
                        <input type="text" class="form-control" id="email" name="edit_password" value="<?php echo $row['password'] ?>" placeholder="Enter your email">
                    </div>
                    <a href="userview.php" class="btn btn-danger">CANCEL</a>
                    <button name="updatebtn" type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </body>
        </html>
        <?php
    }
}
?>
