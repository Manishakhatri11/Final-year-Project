<?php

$showAlert = false;
$showError = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include '../partial/dbconnect.php';
  $username = $_POST["username"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  // $exists = false;

  //  to check username exist
  $existSql = "SELECT * FROM users WHERE username = '$username' ";
  $result = mysqli_query($conn, $existSql);

  $numExistRows = mysqli_num_rows($result);

  if ($numExistRows > 0) {
    $showError = "Username already Exist";
  } else {
    // $exists = false;
    if ($password == $cpassword) {
      $sql = "INSERT INTO `users` ( `username`, `email`, `phone`, `password`) VALUES ( '$username', '$email', '$phone', '$password')";
      $result = mysqli_query($conn, $sql);

      if ($result) {
        $showAlert = true;
         header("location: userview.php");
      }
    } else {
      $showError = "Password do not match";
    }
  }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Register </title>
  <link href="style/style.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">


<?php
if ($showAlert) {
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> New account is created.'.$showAlert.'
  
  </div>';
 
} 

if ($showError) {
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> '.$showError.'
   
  </div>';
}
?>

</body>
</html>