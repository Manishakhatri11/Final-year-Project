<?php

include '../userinclude/header.php';
include '../userinclude/navbar.php';
include '../userinclude/footer.php';
include '../userinclude/script.php';


?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bus Seat Booking</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .bus-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .seat {
      width: 30px;
      height: 30px;
      margin: 5px;
      background-color: #ccc;
      display: inline-block;
      border-radius: 5px;
      cursor: pointer;
    }

    .seat.available {
      background-color: #b2d8b2;
    }

    .seat.selected {
      background-color: #5cb85c;
    }

    .seat.booked {
      background-color: #f08080;
      cursor: not-allowed;
    }
  </style>
</head>
<body>
  <div class="bus-container">
    <h2>Bus Seat Booking</h2>
    <p>Select a seat:</p>
    <div class="seats">
      <!-- In this example, we create a 4x6 seat grid for demonstration purposes -->
      <!-- You can adjust the number of rows and columns as per your requirements -->
      <?php
        $rows = 4;
        $columns = 6;
        $totalSeats = $rows * $columns;
        $bookedSeats = [10, 15, 20]; // Example: You can have an array of already booked seats.

        // Generating seat elements
        for ($i = 1; $i <= $totalSeats; $i++) {
          if (in_array($i, $bookedSeats)) {
            echo "<div class='seat booked' data-seat='$i'></div>";
          } else {
            echo "<div class='seat available' data-seat='$i'></div>";
          }
          if ($i % $columns === 0) {
            echo "<br>";
          }
        }
      ?>
    </div>
    <button id="bookBtn">Book Seat</button>
    <button id="resetBtn">Reset</button>
  </div>

  <script>
    // JavaScript for seat selection and reset
    const seats = document.querySelectorAll('.seat');
    const bookBtn = document.getElementById('bookBtn');
    const resetBtn = document.getElementById('resetBtn');

    function toggleSeatSelection() {
      if (!this.classList.contains('booked')) {
        this.classList.toggle('selected');
      }
    }

    function bookSelectedSeats() {
      const selectedSeats = document.querySelectorAll('.seat.selected');
      if (selectedSeats.length === 0) {
        alert('Please select at least one seat.');
      } else {
        // Perform booking logic here (e.g., send data to the server)
        alert('Seats booked successfully!');
        // You can also redirect to a confirmation page or do other actions as needed.
      }
    }

    function resetSeatSelection() {
      seats.forEach(seat => {
        if (!seat.classList.contains('booked')) {
          seat.classList.remove('selected');
        }
      });
    }

    seats.forEach(seat => seat.addEventListener('click', toggleSeatSelection));
    bookBtn.addEventListener('click', bookSelectedSeats);
    resetBtn.addEventListener('click', resetSeatSelection);
  </script>


<?php 
 include 'search.php';

?>

<?php
// Check if the search query is submitted
if (isset($_GET['query'])) {
    // Sanitize the search query to prevent SQL injection
    $searchQuery = htmlspecialchars($_GET['query']);

    // Perform the search query in your database (Replace this with your database connection and query logic)
 include '../partial/dbconnect.php';

    // Perform the search query on your database table (Replace "your_table" with your actual table name)
    $sql = "SELECT * FROM buses WHERE bus_number LIKE '%$searchQuery%'";
    $result = $conn->query($sql);

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <?php // if (isset($result) && $result->num_rows > 0) { ?>
            <!-- <h2>Search Results:</h2> -->
            <ul>
                <?php // while ($row = $result->fetch_assoc()) { ?>
                  
                    <!-- <li><?php // echo $row['column_name']; ?></li>
                    <li><?php // echo $row['column_name']; ?></li>
                    <li><?php //echo $row['column_name']; ?></li>
                    <li><?php //echo $row['column_name']; ?></li>
                    <li><?php // echo $row['column_name']; ?></li>
                    <li><?php // echo $row['column_name']; ?></li>
                    <li><?php // echo $row['column_name']; ?></li> -->
                <?php // } ?>
            </ul>
       
    </div>
</body>
</html>


</body>
</html>
