<?php

include '../userinclude/footer.php';
include '../userinclude/header.php';
include '../userinclude/navbar.php';
include '../userinclude/script.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Bus</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      background-color: rgb(64, 82, 100);
    }

    .container {
      /* padding-left: 125px; */
      padding-top: 100px;

    }

    .card {
      margin-bottom: 20px;
    }

    .img-container {
      position: relative;
      overflow: hidden;
    }

    .img-container p,
    .img-container h2 {
      color: white;
      opacity: 0;
      padding: 10px;
      transition: 0.7s;
      background-color: #000002;
      position: absolute;
    }

    .img-container:hover p,
    .img-container:hover h2 {
      opacity: 1;
      transform: translateY(-100%);

    }

    .img-container:hover h2 {
      transform: translateY(-650%);
    }

    img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .fifthpart img {
      border-radius: 8%;
      margin-top: 20px;
    }

    .fifthpart {
      margin-top: 65px;
      height: 600px;
    }

    .col {
      float: left;
    }

    .sevenpart {
      margin-top: 220px;
    }
  </style>

  <!-- This is manual booking -->
  <div class="fifthpart">
    <h2 style="display: block; text-align: center;  color: white;">List of Buses</h2>
    <div class="container-3">
      <div class="row">
        <div class="col">
          <div class="bus-container">
            <div class="img-container">
              <img src="../photoBus/bus1.jpg" alt="bus1">
              <h2>This is AAAA 1111 Bus.</h2>
              <p style="color:white">Forget ordinary rides, AAAA 1111 spells luxury. Glide in plush seats, cool air
                swirling, world a panoramic blur. Service whispers like the engine, every need pampered. More than a
                number, it's a journey - unforgettable comfort on wheels. So catch those four As, four ones, and board
                your escape. </p>
            </div>
            <form action="../bus4/3a-reservation.php">
              <button type="submit" class="btn btn-primary">View More</button>
            </form>
          </div>

        </div>
        <div class="col">
          <div class="bus-container">
            <div class="img-container">
              <img src="../photoBus/bus2.jpg" alt="bus1">
              <h2>This is BBBB 2222 Bus.</h2>
              <p style="color:white">
                The 8:15am bus wasn't just a ride, it was a comfort symphony. Plush seats embraced me, cool air danced,
                and wifi hummed, drowning out the city's din. This daily ritual, my predictable melody, felt like a
                sanctuary amidst the urban chaos. I, a cellist in this silent orchestra, wove my own tune with a book,
                the words flowing with the landscapes outside. But sometimes, a yearning pulsed for a different verse.
                What if these wheels rolled through sun-drenched fields, the soundtrack wind whispering through wheat?
                For now, I cherished my familiar bus lullaby, knowing even the mundane holds the promise of an
                undiscovered note.</p>
            </div>
            <form action="../bus2/3a-reservation.php">
              <button type="submit" class="btn btn-primary">View More</button>
            </form>
          </div>

        </div>
        <div class="col">
          <div class="bus-container">
            <div class="img-container">
              <img src="../photoBus/bus5.jpg" alt="bus1">
              <h2>This is CCCC 3333 Bus.</h2>
              <p style="color:white">Imagine a first-class cabin on wheels: plush recliners, your own TV and Wi-Fi,
                gourmet meals served by stewards. Escape road noise with headphones, choose movies or catch up on work.
                Spacious restrooms, a mini-library, and even a fitness area add to the luxury. This is top-notch bus
                travel, with safety and attentive service ensuring a smooth, pampered journey. </p>
            </div>
            <form action="../bus3/3a-reservation.php">
              <button type="submit" class="btn btn-primary">View More</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>

  </div>
  <div class="container">

    <div class="row mt-3">


      <?php
      require '../partial/dbconnect.php';

      $query = "SELECT * FROM buses";
      $query_run = mysqli_query($conn, $query);
      $check_bus = mysqli_num_rows($query_run) > 0;

      if ($check_bus) {
        while ($row = mysqli_fetch_array($query_run)) {
          ?>

          <div class="col-md-3">
            <div class="card">
              <img src="../photoBus/<?php echo $row['bus_image']; ?> " class="card-img-top" height="200px" width="300px"
                alt="buspic">
              <div class="card-body">
                <h2 class="card-title">
                  <?php echo $row['bus_number']; ?>
                </h2>
                <p class="card-text">
                  <?php echo $row['bus_description']; ?>
                </p>
              </div>
            </div>
          </div>
          <?php
        }
      } else {
        echo "No Record Found";
      }
      ?>
    </div>
  </div>

  <div class="sevenpart">
    <footer class="bg-dark text-white text-center py-4">
      <div class="container-box">
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

</body>


</html>