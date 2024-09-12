<?php 


if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
 $loggedin = true;
 }
 else 
 {
  $loggedin=false;
}


echo ' <nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">E-Bus Ticketing System</a>';
// echo $_SESSION['username'] ;
echo '
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
     
    </li>';
   
    // if(!$Loggedin) {
    
    // }
    if(!$loggedin) {
     
    echo '<li class="nav-item">
     <a class="nav-link btn btn-primary" href="login.php"> login</a>
    </li>';
    }
    if($loggedin) {
    echo '<li class="nav-item">
    <a class="nav-link btn btn-primary" href="logout.php"> logout</a>
   </li>';
   }
   
   
    echo '  </ul>
</div>
</nav>';
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">E-Bus Ticketing System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Book Ticket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">My Tickets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-primary" > <?php   ?> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn-secondary " href="logout.php"> Logout </a>
        </li>
      </ul>
    </div>
  </nav>
  </body>
</html> -->