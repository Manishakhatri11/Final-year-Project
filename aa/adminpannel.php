 <?php 
session_start();

// if(!isset($_SESSION['Loggedin']) || $_SESSION['Loggedin']!=true) {
//     header("location : login.php");
//     exit;
// }



?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel - E-Bus Ticketing System </title>
  
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<?php 
include ('adminstyle.php');

?>





  <div class="container">
    <div class="sidebar">
      <div class="logo">
        <h1>E-Bus</h1>
        Welcome <?php  echo $_SESSION['username']   ?>

      </div>
      <ul class="menu">
        <li><a href="#" class="active"><i class="fas fa-home"></i>Dashboard</a></li>
        <li><a href="#"><i class="fas fa-route"></i>Manage Routes</a></li>
        <li><a href="#"><i class="fas fa-bus"></i>Manage Buses</a></li>
        <li><a href="#"><i class="fas fa-ticket-alt"></i>Manage Bookings</a></li>
        <li><a href="../logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a> </li>
      </ul>
    </div>
    <div class="content">
      <h2>Dashboard</h2>
      <div class="dashboard-stats">
        <div class="stat-card">
          <div class="stat-icon"><i class="fas fa-users"></i></div>
          <div class="stat-info">
            <h3>Total Users</h3>
            <p>1,500</p>
          </div>
        </div>
        <div class="stat-card">
          <div class="stat-icon"><i class="fas fa-bus"></i></div>
          <div class="stat-info">
            <h3>Total Buses</h3>
            <p>50</p>
          </div>
        </div>
        <div class="stat-card">
          <div class="stat-icon"><i class="fas fa-ticket-alt"></i></div>
          <div class="stat-info">
            <h3>Total Bookings</h3>
            <p>3,000</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
</body>
</html> 



