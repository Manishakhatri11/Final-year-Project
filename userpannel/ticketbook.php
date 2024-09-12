<?php 

// include '../userinclude/header.php';
// include '../userinclude/navbar.php';
// include '../userinclude/footer.php';
// include '../userinclude/script.php';


?>

<?php
// Include the dbconnect.php file to establish the database connection
include '../partial/dbconnect.php';

// // Check if the request is a POST request
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Get the booked seats data from the AJAX request
//     $bookedSeats = $_POST['bookedSeats']; // Assuming the AJAX request sends an array of booked seat IDs

//     // You may want to perform validation and security checks here before inserting data into the database

//     // Prepare and execute the query to insert booked seats into the database
//     $query = "INSERT INTO seats (seat_id) VALUES (?)";
//     $stmt = $conn->prepare($query);

//     // Loop through the booked seats and insert each one into the database
//     foreach ($bookedSeats as $seatId) {
//         $stmt->bind_param("i", $seatId);
//         $stmt->execute();
//     }

//     // Close the statement and database connection
//     $stmt->close();
//     $conn->close();

//     // Respond to the AJAX request with a success message
//     echo json_encode(['status' => 'success', 'message' => 'Seats booked successfully.']);
// } else {
//     // Respond to the AJAX request with an error message if it's not a POST request
//     echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
// }




// Include the dbconnect.php file to establish the database connection
include '../partial/dbconnect.php';

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the booked seats data from the AJAX request
    $bookedSeats = json_decode($_POST['bookedSeats']);

    // Insert the booked seats into the database
    foreach ($bookedSeats as $seatId) {
        // Assuming the booked_seats table has columns: id (auto-increment), seat_id (for seat number)
        $query = "INSERT INTO seats (seat_id) VALUES ('$seatId')";
        $conn->query($query);
    }

    // Respond with a success message (you can customize the response as needed)
    $response = array('status' => 'success', 'message' => 'Booked seats inserted into the database.');
    echo json_encode($response);
} else {
    // Respond with an error message for invalid request method
    $response = array('status' => 'error', 'message' => 'Invalid request method.');
    echo json_encode($response);
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <style>

    /* Define colors */
body {
  padding: 15px;
}

.bus {
  border: 1px solid #ddd;
  width: 20%;
  padding: 0.5rem;
  border-radius: 4px;
}

.bus.seat2-3 .seats .seat:nth-child(2),
.bus.seat2-2 .seats .seat:nth-child(2) {
  margin-right: 14.28571428571429%;
}

.bus.seat3-2 .seats .seat:nth-child(3) {
  margin-right: 14.28571428571429%;
}

.seats {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  -ms-flex-pack: center !important;
  justify-content: center !important;
  padding: 0;
  margin-bottom: 2px;
}

.seat {
  display: flex;
  flex: 0 0 14.28571428571429%;
  padding: 3px;
  position: relative;
}

.seat label {
  border-radius: 4px;
  background: #3783b5;
  padding: 0;
  width: 25px;
  height: 25px;
  margin-bottom: 0.1rem;
  display: inline-block;
  font-size: 0.7rem;
}

.seat input[type="radio"] {
  display: none !important;
}

.seat input[type="radio"] + label {
  border-radius: 4px;
  background: #3783b5;
  text-align: center;
  cursor: pointer;
  display: inline-block;
  padding: 4px;
  color: #fff;
}

.seat input[type="radio"]:hover + label {}

.seat input[type="radio"]:checked + label {
  background: #46be8a;
}

.seat input[type="radio"]:disabled + label {
  cursor: not-allowed;
  background: #f73737;
}

  </style>
  <label>Choose Seat</label>
<div class="bus seat2-2 border-0 p-0">
  <form action="ticketbook.php"  method="post" >
  <div class="seat-row-1">
    <ol class="seats">
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-1" value="1" required="" type="radio">
        <label for="seat-radio-1-1">
                                                                            1                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-2" value="2" required="" type="radio">
        <label for="seat-radio-1-2">
                                                                            2                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-3" value="3" required="" type="radio">
        <label for="seat-radio-1-3">
                                                                            3                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-4" value="4" required="" type="radio">
        <label for="seat-radio-1-4">
                                                                            4                                                                        </label>
      </li>
    </ol>
  </div>
  <div class="seat-row-2">
    <ol class="seats">
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-5" value="5" required="" type="radio">
        <label for="seat-radio-1-5">
                                                                            5                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-6" value="6" required="" type="radio">
        <label for="seat-radio-1-6">
                                                                            6                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-7" value="7" required="" type="radio">
        <label for="seat-radio-1-7">
                                                                            7                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-8" value="8" required="" type="radio">
        <label for="seat-radio-1-8">
                                                                            8                                                                        </label>
      </li>
    </ol>
  </div>
  <div class="seat-row-3">
    <ol class="seats">
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-9" value="9" required="" type="radio">
        <label for="seat-radio-1-9">
                                                                            9                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-10" value="10" required="" type="radio">
        <label for="seat-radio-1-10">
                                                                            10                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-11" value="11" required="" type="radio">
        <label for="seat-radio-1-11">
                                                                            11                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-12" value="12" required="" type="radio">
        <label for="seat-radio-1-12">
                                                                            12                                                                        </label>
      </li>
    </ol>
  </div>
  <div class="seat-row-4">
    <ol class="seats">
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-13" value="13" required="" type="radio" disabled>
        <label for="seat-radio-1-13">
                                                                            13                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-14" value="14" required="" type="radio">
        <label for="seat-radio-1-14">
                                                                            14                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-15" value="15" required="" type="radio">
        <label for="seat-radio-1-15">
                                                                            15                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-16" value="16" required="" type="radio">
        <label for="seat-radio-1-16">
                                                                            16                                                                        </label>
      </li>
    </ol>
  </div>
  <div class="seat-row-5">
    <ol class="seats">
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-17" value="17" required="" type="radio">
        <label for="seat-radio-1-17">
                                                                            17                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-18" value="18" required="" type="radio">
        <label for="seat-radio-1-18">
                                                                            18                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-19" value="19" required="" type="radio">
        <label for="seat-radio-1-19">
                                                                            19                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-20" value="20" required="" type="radio">
        <label for="seat-radio-1-20">
                                                                            20                                                                        </label>
      </li>
    </ol>
  </div>
  <div class="seat-row-6">
    <ol class="seats">
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-21" value="21" required="" type="radio">
        <label for="seat-radio-1-21">
                                                                            21                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-22" value="22" required="" type="radio">
        <label for="seat-radio-1-22">
                                                                            22                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-23" value="23" required="" type="radio">
        <label for="seat-radio-1-23">
                                                                            23                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-24" value="24" required="" type="radio">
        <label for="seat-radio-1-24">
                                                                            24                                                                        </label>
      </li>
    </ol>
  </div>
  <div class="seat-row-7">
    <ol class="seats">
      <li class="seat">
        <label for="seat-radio-1-BLANK" style="background: none;"></label>
      </li>
      <li class="seat">
        <label for="seat-radio-1-BLANK" style="background: none;"></label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-25" value="25" required="" type="radio">
        <label for="seat-radio-1-25">
                                                                            25                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-26" value="26" required="" type="radio">
        <label for="seat-radio-1-26">
                                                                            26                                                                        </label>
      </li>
    </ol>
  </div>
  <div class="seat-row-8">
    <ol class="seats">
      <li class="seat">
        <label for="seat-radio-1-BLANK" style="background: none;"></label>
      </li>
      <li class="seat">
        <label for="seat-radio-1-BLANK" style="background: none;"></label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-27" value="27" required="" type="radio">
        <label for="seat-radio-1-27">
                                                                            27                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-28" value="28" required="" type="radio" disabled>
        <label for="seat-radio-1-28">
                                                                            28                                                                        </label>
      </li>
    </ol>
  </div>
</div>
</form>
<div class="text-left mt-2">
  <button class="btn btn-primary btn-xs mb-2"   >Available</button>
  <button class="btn btn-success btn-xs mb-2">Choosen</button>
  <button class="btn btn-success btn-xs mb-2"  onclick="" >Reset</button>
  <button  type="submit" name="submit" class="btn btn-danger btn-xs mb-2" class="book-btn" onclick="bookSeats()">Booked</button>
</div>

<script>
  
    const seats = document.querySelectorAll('.seat input[type="radio"]');
    seats.forEach(seat => {
      seat.addEventListener('click', () => {
        toggleSeatSelection(seat);
      });
    });

    // Function to toggle the seat selection
    function toggleSeatSelection(seat) {
      const seatLi = seat.parentNode;
      if (!seat.disabled) { // Check if the seat is available (not disabled)
        if (seat.checked) {
          seatLi.classList.add('selected'); // Mark the seat as chosen
        } else {
          seatLi.classList.remove('selected'); // Unmark the seat if it's unchecked
        }
      }
    }

    // Function to book selected seats
    function bookSeats() {
    const selectedSeats = document.querySelectorAll('.seat.selected input[type="radio"]');
    const bookedSeatIds = Array.from(selectedSeats).map(seat => seat.value);

    // Send the booked seat data to the server using AJAX
    if (bookedSeatIds.length > 0) {
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'book_seats.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            if (response.status === 'success') {
              alert(response.message);
              // Now, you can refresh the page or perform any other actions as needed.
              location.reload();
            } else {
              alert(response.message);
            }
          } else {
            alert('An error occurred while processing the request.');
          }
        }
      };
      const data = 'bookedSeats=' + encodeURIComponent(JSON.stringify(bookedSeatIds));
      xhr.send(data);
    } else {
      alert('Please select at least one seat.');
    }
  }


    // Example of how to book seats (you can trigger this function based on your booking process)
    const bookButton = document.querySelector('.book-btn');
    bookButton.addEventListener('click', () => {
      bookSeats();
    });

    // Function to save booked seats to localStorage
    function saveBookedSeats() {
      const bookedSeats = document.querySelectorAll('.seat.booked input[type="radio"]');
      const bookedSeatIds = Array.from(bookedSeats).map(seat => seat.value);
      localStorage.setItem('booked', JSON.stringify(bookedSeatIds));
    }

    // Function to load booked seats from localStorage
    function loadBookedSeats() {
      const bookedSeatIds = JSON.parse(localStorage.getItem('booked'));
      if (bookedSeatIds) {
        bookedSeatIds.forEach(seatId => {
          const seatInput = document.querySelector(`.seat input[value="${seatId}"]`);
          if (seatInput) {
            seatInput.disabled = true;
            seatInput.parentNode.classList.add('booked');
          }
        });
      }
    }

    // Load booked seats when the page is loaded
    window.addEventListener('DOMContentLoaded', () => {
      loadBookedSeats();
    });

    // Add event listener to the "Reset" button
    const resetButton = document.querySelector('.reset-btn');
    resetButton.addEventListener('click', () => {
      localStorage.removeItem('booked');
      const bookedSeats = document.querySelectorAll('.seat.booked input[type="radio"]');
      bookedSeats.forEach(seat => {
        seat.disabled = false;
        seat.parentNode.classList.remove('booked');
      });
    });

    // Add event listener to save booked seats before unloading the page
    window.addEventListener('unload', () => {
      saveBookedSeats();
    });
    
  </script>
</body>
</html>