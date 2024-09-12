<?php

$showAlert = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partial/dbconnect.php';
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    
    // Validate inputs
    if (empty($username) || empty($email) || empty($phone) || empty($password) || empty($cpassword)) {
        $showError = "All fields are required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $showError = "Invalid email format";
    } elseif (!preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*()-+_={}|\[\]:;"\'<>,.?\/]).{6,}$/', $password)) {
        $showError = "Password must be at least 6 characters and include at least one uppercase letter, one lowercase letter, one numeric digit, and one special character";
    } elseif ($password !== $cpassword) {
        $showError = "Passwords do not match";
    } else {
        // Check if username already exists
        $existSql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $existSql);
        $numExistRows = mysqli_num_rows($result);
        
        if ($numExistRows > 0) {
            $showError = "Username already exists";
        } else {
            // Check if phone number already exists
            $existSql = "SELECT * FROM users WHERE phone = '$phone'";
            $result = mysqli_query($conn, $existSql);
            $numExistRows = mysqli_num_rows($result);
            
            if ($numExistRows > 0) {
                $showError = "Phone number already exists";
            } else {
                // Check if email already exists
                $existSql = "SELECT * FROM users WHERE email = '$email'";
                $result = mysqli_query($conn, $existSql);
                $numExistRows = mysqli_num_rows($result);
                
                if ($numExistRows > 0) {
                    $showError = "Email address already exists";
                } else {
                    // Insert user data into the database
                    $sql = "INSERT INTO `users` (`username`, `email`, `phone`, `password`) VALUES ('$username', '$email', '$phone', '$password')";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        $showAlert = true;
                    } else {
                        $showError = "Error in database query";
                    }
                }
            }
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

echo '  <div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success </strong> You account is created.

</div>  '  ;
} 
if ($showError) {

echo '  <div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Error!</strong>'.$showError.'

</div> '  ;
} 

?>


  <form action="signup.php" method="post">
    <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
        <main>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                  <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="username" type="text" name="username"
                              placeholder="Enter your first name" />
                            <label for="inputFirstName">First name</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input class="form-control" id="phone" type="text" name="phone"
                              placeholder="Enter your phone number" />
                            <label for="phone number">Phone Number</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" type="email" name="email"
                          placeholder="Enter your Name" />
                        <label for="inputEmail">Email address</label>
                      </div>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="inputPassword" type="password" name="password"
                              placeholder="Create a password" />
                            <label for="inputPassword">Password</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="inputPasswordConfirm" type="cpassword" name="cpassword"
                              placeholder="Confirm password" />
                            <label for="inputPasswordConfirm">Confirm Password</label>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 mb-0">
                        <div class="d-grid"><button type="submit" name="submit" class="btn btn-primary btn-block" >Create Account</a>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="card-footer text-center py-3">
                    <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>

    </div>
    </footer>
    </div>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
</body>

</html>