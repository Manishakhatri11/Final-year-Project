<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">
  <title>E-Bus Ticketing System</title>

  <link rel="stylesheet" href="style/style1.css">

</head>

<body>
  <style>
    body {
      font-family: 'Roboto';
    }
    * {
      box-sizing: border-box;
    }
    .secondpart {
      padding: 65px;
      height: 500px;
      background-color: rgb(51, 51, 51);

    }
    .secondpart h2,
    p {
      color: white;
    }

    .secondpart img {
      border-radius: 5%;
    }

    img {

      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .left {
      float: left;
      width: 50%;
      height: auto;
    }

    .right {
      float: right;
      width: 50%;
      height: auto;
      padding-left: 20px;
    }
    .right h2 {
      padding: 20px;
      font-weight: 500;
      font-size: 40px;
      line-height: 36px;
    }
    .right p {
      font-weight: 400;
    font-size: 18px;
   
    }

    .jumbotron {
      background-color: #f8f9fa;
      padding: 2rem;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0069d9;
      border-color: #0062cc;
    }

    .login-form {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f8f9fa;
      border: 1px solid #dee2e6;
      border-radius: 5px;
    }

    .collection {
      display: flex;
      margin: 10px;
      padding: 10px;
    }

    .thirdpart {
      color: white;
      background-color: rgb(64, 82, 100);
      padding: 50px;
    }

    .thirdpart img {
      height: 400px;
      border-radius: 5%;
    }

    .convinent {
      padding-top: 40px;
    }

    .service {
      color: white;
      padding: 20px;
      font-weight: 500;
      font-size: 40px;
      line-height: 36px;
    }

    .fourthpart {
      padding: 65px;
      background-color: rgb(52, 152, 219);
    }

    .fourthpart h3 {
      font-weight: 500;
      font-size: 40px;
      line-height: 36px;
    }

    .fourthpart p {
      color: black;
    }

    .fifthpart {
      padding: 65px;
      background-color: rgb(51, 51, 51);
    }

    .client {
      padding-bottom: 20px;
      color: white;
      font-weight: 500;
      font-size: 45px;
      line-height: 36px;
    }

    .cont {
      padding-top: 50px;
    }

    .fifthpart img {
      height: 400px;
      border-radius: 8%;
    }

    .sixpart {
      color: white;
      padding: 65px;
      background-color: rgb(64, 82, 100);
      height: 500px;
    }

    .sixleft {
      padding-top: 100px;
      float: left;
      width: 50%;
      display: block;
      text-align: center;
      font-weight: 400;
    font-size: 18px;
    line-height: 34px;

    }
    .sixleft h3 {
      font-weight: 400;
      font-size: 63px;
      line-height: 36px;
    }

    .sixright {
      float: right;
      width: 50%;
      padding-left: 20px ;
    }
 input, textarea {
  border-radius: 10%;
  background: ;
 }
 .middle {
  padding-bottom: 350px;
 }
.middle h3{
  font-weight: 400;
      font-size: 63px;
      line-height: 36px;
}
.middle p {
  padding-top: 20px;
    font-weight: 400;
    font-size: 26px;
    line-height: 33px;
}
  </style>

  <?php
  require 'navbar.php'
    ?>

  <!-- fisrt part # -->

  <div class="firstpart">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/bus3.jpg" height="700px" class="d-block w-100"  alt="bus1">
          <div class="carousel-caption d-none d-md-block">
            <div class="middle" >
            <h3>Book Your Bus Ticket </h3> <br>
            <h3> Online!</h3>
            <p>Avoid long queues and book your bus ticket easily with Smart Bus.</p>
            
            <form action="login.php">
            <button value="submit" class="btn btn-primary"> Book Now</button>
            </form>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>



  <!-- second part about us -->
  <div class="secondpart">

    <div class="left">
      <img src="image/bus2.jpg" alt="bus2">
    </div>

    <div class="right">
      <h2>About Us</h2> <br>
      <p>Smart Bus is a leading ebus ticket provider based in Kathmandu, P3. With a commitment to revolutionize the way
        people travel, we strive to offer convenient and hassle-free ticketing solutions. Our user-friendly platform
        allows travelers to easily book and manage their bus tickets, saving them time and effort. Whether you are
        planning a short trip or a long journey, Smart Bus is here to make your travel experience seamless and
        enjoyable.</p>
    </div>

  </div>



  <!-- this is third part -->

  <div class="thirdpart">

    <h2 class="service"> SERVICES </h2>

    <div class="container-3">
      <div class="row">
        <div class="col">
          <img src="image/services1.jpg" alt="serv1">

          <div class="convinent">
            <h3> Convinent ebus ticketing</h3>
            <p>Book your bus tickets hassle-free and conviently with our easy-to-use ebus ticketing platfrom.</p>
            <button class="btn btn-primary"> <a link="login.php"> More Info </a> </button>
          </div>
        </div>
        <div class="col">
          <img src="image/services2.jpg" alt="serv2">
          <div class="convinent">
            <h3> Real-time bus schedules</h3>
            <p>Stay updated with real-time bus schedules, ensuring you never miss your bus and can plan your journey
              smoothly.</p>
            <button class="btn btn-primary"> <a link="login.php"> More Info </a> </button>
          </div>
        </div>
        <div class="col">
          <img src="image/services3.jpg" alt="serv3">
          <div class="convinent">
            <h3> Secure Online payment</h3>
            <p>Experience a secure online payment process when booking your bus tickets, providing you peace of mind for
              every transcation. </p>
            <button class="btn btn-primary"> <a link="login.php"> More Info </a> </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- This is fourth part  -->

  <div class="fourthpart">

    <h3>Smart Bus made my travel experience in Kathmandu so much easier with their ebus ticket system. No more long
      lines or hassle with cash! Thank you Smart Bus for the convenience and efficiency!</h2>

      <br>
      <p> - Wangbu Tamang</p>
  </div>



  <!-- This is client part fifth part -->


  

  <!-- This is message submit box six part -->
<!-- 
  <div class="sixpart">
    <div class="sixleft">
      <h3> About us</h3>
      <br>
      <p>Use the form below to get in touch with us and we'll respond as soon as possible. We're here to answer any
        questions you may have about our ebus ticket service.</p>
    </div>

    <div class="sixright">

    <form action="contactus" method="post" >
      <label for="">Enter Your Name</label> <br>
      <input type="text" name="yourname" id=""> <br>
      <label for="">Enter Your Email</label> <br>
      <input type="text" name="youremail" id=""><br>
      <label for="">Message</label> <br>
      <textarea name="textarea" id="" cols="40" rows="5"></textarea><br>
      <br>
      <br>
      <button class="btn btn-primary" > Send</button>
      </form>
    </div>

  </div> -->


<!-- this is last part footer seven  part -->

<div class="sevenpart">
<footer class="bg-dark text-white text-center py-4">
    <div class="container">
      <div class="row">
        <div class="col">
          <h4> Smart Bus</h4>
          <p>
            Bus Smart is your smart choice for convenient and comfortable bus travel.
          </p>
        </div>
        <div class="col">
          <h4>Contact</h4>
          <p>Kathmandu, Boudha City</p>
          <p>Phone: +977 9818-207687</p>
        </div>
        <div class="col">
          <h4>Email</h4>
          <p>Email: info@smartbus.com</p>
        </div>
      </div>
    </div>
  </footer>
</div>















  <!-- 
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-4">Welcome to E-Bus Ticketing System</h1>
      <p class="lead">Book your bus tickets online easily and conveniently.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Get Started</a>
    </div>
  </div>

  <footer class="footer mt-auto py-3 bg-light">
    <div class="container text-center">
      <span class="text-muted">E-Bus Ticketing System &copy; 2023</span>
    </div>
  </footer> -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>