<?php

error_reporting(0);

session_start();

$login = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partial/dbconnect.php';
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $userid = $_POST["user_id"];

    
    $sql = "SELECT user_id, username, email, phone, usertype FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);


    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $username;
           

            $_SESSION['email'] = $row['email'];
            $_SESSION['phone'] = $row['phone'];
            
            if ($row["usertype"] == "user") {
                header("location: userpannel/user.php");
                exit;
            } elseif ($row["usertype"] == "admin") {
                header("location: admin/admin.php");
                exit;
            }
        } else {
            $showError = "Invalid username or password";
        }
    } else {
        $showError = "Database error";
    }
}
session_destroy();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/style.css">
  <title>Login - E-Bus Ticketing System</title>


</head>

<body>
  <?php
  require 'style/loginstyle.php'
    ?>
  <?php

  if ($login) {

    echo '  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success </strong> You are logged in.

</div>  ';
  }
  if ($showError) {

    echo '  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong>' . $showError . '
 
</div> ';
  }

  ?>

  <body class="bg-primary">
    <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
        <main>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                  <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Login</h3>
                  </div>
                  <div class="card-body">
                    <form action="login.php" method="post">
                      <div class="form-floating mb-3">
                        <input class="form-control" id="text" name="username" type="text"
                          placeholder="Enter your name" />
                        <label for="inputEmail">UserName</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input class="form-control" id="inputPassword" type="password" name="password"
                          placeholder="Password" />
                        <label for="inputPassword">Password</label>
                      </div>
                      

                      <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                        <script>
                          function msg() {
                            alert("Relax and try to remember your password.");
                          }
                        </script>


                        <a class="small" onclick="msg()">Forgot Password? </a>

                        <button type="submit" class="btn btn-primary">Login </button>
                      </div>
                    </form>
                  </div>
                  <div class="card-footer text-center py-3">
                    <div class="small"><a href="signup.php">Need an account? Sign up!</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
      <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">


            </div>
          </div>
      </div>
      </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
  </body>

</html>