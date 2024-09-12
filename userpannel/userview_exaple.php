<!--
// session_start();



// include '../partial/dbconnect.php';
// $id=$_SESSION["id"];
// //$id = $_GET["id"];       
// // if(!is_numeric($id)){ 
// // echo "Data Error";
// // exit;
// // }

// $sql = "SELECT username, email, phone FROM users WHERE id = $id "; 

// $result = mysqli_query($conn, $sql);
// if ($result->num_rows > 0) {
   
//     $row = $result->fetch_assoc();
//     $name = $row["username"];
//     $email = $row["email"];
// //     $phone = $row["phone"];

  
// // } else {
// //     echo "No data found";
// // }



// // $user_id = $_SESSION['id'];
// //     $sql = "SELECT * FROM users WHERE id = $user_id";
// //     $result = mysqli_query($conn, $sql);
// //     if($row = mysqli_fetch_assoc($result))
// //     {
// //         // $user_fullname = $row["user_fullname"];
// //         $user_name = $row["id"];
// //     }



// // if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
// //  // header("location : ");
// //   exit;
// // }function get_user_data($username) {
  
  
//   session_start();
//   include '../partial/dbconnect.php'; // Assuming this file contains your database connection
  
//   // Function to sanitize input (to prevent SQL injection)
//   function sanitize_input($data) {
//       global $conn;
//       return mysqli_real_escape_string($conn, trim($data));
//   }
  
//   // Function to verify login credentials and fetch user data
//   function verify_login($uusername, $password) {
//       global $conn;
  
//       $uusername = sanitize_input($uusername);
//       $password = sanitize_input($password);
  
//       // Fetch user data from the database
//       $query = "SELECT email FROM users WHERE username = '$uusername' LIMIT 1";
//       $result = $conn->query($query);
  
//       if ($result->num_rows === 1) {
//           $row = $result->fetch_assoc();
//           $hashed_password = "fetch hashed password from the database based on the username"; // Implement this logic to fetch the hashed password from the database
  
//           // Implement your password verification logic here
//           // You can use password_verify() function to verify the password against the hashed password stored in the database
//           if (password_verify($password, $hashed_password)) {
//               return $row['email']; // Return the user's email if the password is verified
//           }
//       }
  
//       return null; // User data not found or login failed
//   }
  
//   if (isset($_POST['loggedin'])) { // Change 'login' to 'loggedin'
//       $uusername = $_POST['username'];
//       $password = $_POST['password'];
  
//       $user_email = verify_login($uusername, $password); // Verify login credentials and fetch user data
  
//       if ($user_email !== null) {
//           // Login successful, store the user data in the session
//          
//           // Redirect to a secure page or display user data here
//           header("Location: secure_page.php");
//           exit();
//       } else {
//           // Login failed, show an error message or redirect back to the login page
//           echo "Login failed. Please check your credentials.";
//       }
//   }








<?php
// include '../userinclude/header.php';
// include '../userinclude/navbar.php';
// include '../userinclude/footer.php';
// include '../userinclude/script.php';

// include '../partial/dbconnect.php';


//     $query = "SELECT * FROM users WHERE id = '$id'";
//     $query_run = mysqli_query($conn, $query);

//     if($query_run) {

//     }


?>





















   //  >?
  //       <!DOCTYPE html>
  //       <html>
  //       <head>
  //           <title>View  Profile</title>
  //           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  //       </head>
  //       <body>
  //           <style>
  //               .container {
  //                   padding-left: 125px;
  //                   padding-top: 100px;
  //               }
  //           </style>
  //           <div class="container">   
  //               <h4 class="my-4">Edit Customer Details</h4>
           
  //                   <input type="hidden" name="edit_id" value="<?php //  echo $row['id'] ?>"> -->
  <!-- //                   <div class="form-group">
  //                       <label for="name">User Name: <?php // echo $row['username'] ?></label>
                       
  //                   </div>
  //                   <div class="form-group">
  //                       <label for="lastName">Phone Number: <?php // echo $row['phone'] ?> </label>
                      
  //                   </div>
  //                   <div class="form-group">
  //                       <label for="number">Email: <?php // echo $row['email'] ?> </label>
                       
  //                   </div>            
  //           </div>
  //       </body>
  //       </html>
-->
<?php 

//  session_start();
// if ($_SESSION['loggedin'] == '') {
//     header("location: ../login.php");
//       exit; 
//   }

include '../userinclude/header.php';
include '../userinclude/navbar.php';
include '../userinclude/footer.php';
include '../userinclude/script.php';

// session_start();

// Check if the user is logged in, if not, redirect to the login page
// if (!isset($_SESSION['loggedin']) || empty($_SESSION['loggedin'])) {
//     header("location: .user.php");
//     exit;
// }

// Retrieve user information from the session
// $username = $_SESSION['username'];
// $email = $_SESSION['email'];
// $phone = $_SESSION['phone'];
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
    height: 450px;
    width: auto;
    padding-left: 26px;
    padding-top: 30px;
    border: 1px solid black;
  }
</style>

<div class="container">
  <!-- <table class="table table-striped">
    <tr>
      <th>Name</th>
      <td> <p><strong>Username:</strong> <?php // echo $username; ?></p></td>
    </tr>
    <tr>
      <th>Email</th>
      <td> <p><strong>Email:</strong> <?php // echo $email; ?></p></td>
    </tr>
    <tr>
      <th>Contact Number</th>
      <td><p><strong>Phone:</strong> <?php // echo $phone; ?></p></td>
    </tr>
   
  </table> -->


  <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Profile Information
          </div>
          <div class="card-body">
            <!-- Display user's profile information -->
            <p>Name: John Doe</p>
            <p>Email: john@example.com</p>
            <p>Phone: 123-456-7890</p>
          </div>
        </div>
      </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 
