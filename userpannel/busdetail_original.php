<?php
include '../userpannel/setting.php';


include '../partial/dbconnect.php';

if (isset($_POST['detail_btn'])) {
    $id = $_POST['detail_id'];

    $query = "SELECT * FROM buses WHERE bus_id = '$id'";
    $query_run = mysqli_query($conn, $query);

    foreach ($query_run as $row) {
        ?>
        <!DOCTYPE html>
        <html>

        <head>
            <title>Bus Detail</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../css/jquery.seat-charts.css">
            <link rel="stylesheet" type="text/css" href="../css/style.css">
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script src="../js/jquery.seat-charts.js"></script>
        </head>

        <body>
            <style>
                * {
                    box-sizing: border-box;
                }

                img {

                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }

                .container_box {
                    padding-left: 230px;
                    padding-top: 100px;

                }

                .box {
                    /* border: 1px solid black; */
                    height: auto;
                }

                .left {
                    float: left;
                    width: 60%;
                    padding: 10px;

                }

                .right {
                    float: left;
                    width: 40%;

                    padding: 50px;
                }

                .heading {
                    text-align: center;
                }

                .left {
                    display: left;
                }

                .front {
                    text-align: center;
                }

                ol {
                    list-style: none;
                    padding: 0;
                    margin: 0;
                }

                .seats {
                    display: flex;
                    flex-direction: row;
                    flex-wrap: nowrap;
                    justify-content: flex-start;
                }

                .seat {
                    display: flex;
                    flex: 0 1 14.28%;
                    padding: 5px;
                    position: relative;
                }

                .seat label {
                    display: block;
                    position: relative;
                    width: 100%;
                    text-align: center;
                    font-size: 14px;
                    font-weight: bolder;
                    line-height: 1.5rem;
                    padding: 4px 0;
                    background-color: #5bfc60;
                    border-radius: 5px;
                    color: black;
                }

                .seat label:hover {
                    cursor: pointer;
                    box-shadow: 0 0 0px 2px blue;
                    background-color: rgb(75, 107, 255);
                    color: white;
                }

                .seat input[type=checkbox] {
                    position: absolute;
                }

                .bus {
                    width: 90px;
                    height: 40px;
                    margin: 5px;
                    border: 1px solid #ccc;
                    display: inline-block;
                    text-align: center;
                    line-height: 40px;
                    font-weight: bold;
                }

                .available {
                    background-color: #5bfc60;
                }

                .chosen {
                    background-color: rgb(75, 107, 255);
                }

                .booked {
                    background-color: red;
                }
            </style>


            <div class="container_box">
                <h2 class="heading">Bus Detail</h2>
                <div class="box">

                    <div class="left">
                        <img src="../photobus/<?php echo $row['bus_image']; ?>" alt="">
                    </div>

                    <div class="right">
                        <h5 class="my-4">Bus Name :</h5>
                        <p>
                            <?php echo $row['bus_number']; ?>
                        </p>

                        <h5> Bus Description: </h5>
                        <p>
                            <?php echo $row['bus_description']; ?>
                        </p>







                        <!-- 

                        <form action="" method="post">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Book Your Seat
                            </button>
                        </form>    -->
                        <!-- Modal -->
                        <!-- to use modal we need js -->
                        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"> Bus Name:
                                            <?php // echo $row['bus_number']; ?>
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body"> -->

                        <!-- <form id="bookingForm" action="useradd.php" method="post"> 
                                            <h3> Book Your Seat</h3> <br> 

                                             This is seat  
                                              <div class="highlight">  



                                               <ol id="seatMap">
                                                    <li>
                                                        <ol class="seats">
                                                            <li class="seat">
                                                                <input type="checkbox" id="a1" class="seat-checkbox" name="A1">
                                                                <label for="a1">A1</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="a3" class="seat-checkbox" name="A3">
                                                                <label for="a3">A3</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="a5" class="seat-checkbox" name="A5">
                                                                <label for="a5">A5</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="a7" class="seat-checkbox" name="A7">
                                                                <label for="a7">A7</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="a9" class="seat-checkbox" name="A9">
                                                                <label for="a9">A9</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="a11" class="seat-checkbox" name="A11">
                                                                <label for="a11">A11</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="a13" class="seat-checkbox" name="A13">
                                                                <label for="a13">A13</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="a15" class="seat-checkbox" name="A15">
                                                                <label for="a15">A15</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="a17" class="seat-checkbox" name="A17">
                                                                <label for="a17">A17</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="a19" class="seat-checkbox" name="A19">
                                                                <label for="a19">A19</label>
                                                            </li>
                                                        </ol>
                                                        <ol class="seats">
                                                            <li class="seat">
                                                                <input type="checkbox" id="a2" class="seat-checkbox" name="A2">
                                                                <label for="a2">A2</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="a4" class="seat-checkbox" name="A4">
                                                                <label for="a4">A4</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="a6" class="seat-checkbox" name="A6">
                                                                <label for="a6">A6</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="a8" class="seat-checkbox" name="A8">
                                                                <label for="a8">A8</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="a10" class="seat-checkbox" name="A10">
                                                                <label for="a10">A10</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="a12" class="seat-checkbox" name="A12">
                                                                <label for="a12">A12</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="a14" class="seat-checkbox" name="A14">
                                                                <label for="a14">A14</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="a16" class="seat-checkbox" name="A16">
                                                                <label for="a16">A16</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="a18" class="seat-checkbox" name="A18">
                                                                <label for=" ">A18</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="a20" class="seat-checkbox" name="A20">
                                                                <label for="a20">A20</label>
                                                            </li>
                                                        </ol>  

                                                         this is break 
                                                         <br>
                                                        <ol class="seats">
                                                            <li class="seat">
                                                                <input type="checkbox" id="b1" class="seat-checkbox" name="B1">
                                                                <label for="b1">B1</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="b3" class="seat-checkbox" name="B3">
                                                                <label for="b3">B3</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="b5" class="seat-checkbox" name="B5">
                                                                <label for="b5">B5</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="b7" class="seat-checkbox" name="B7">
                                                                <label for="b7">B7</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="b9" class="seat-checkbox" name="B9">
                                                                <label for="b9">B9</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="b11" class="seat-checkbox" name="B11">
                                                                <label for="b11">B11</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="b13" class="seat-checkbox" name="B13">
                                                                <label for="b13">B13</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="b15" class="seat-checkbox" name="A15">
                                                                <label for="b15">B15</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="b17" class="seat-checkbox" name="B17">
                                                                <label for="b17">B17</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="b19" class="seat-checkbox" name="B19">
                                                                <label for="b19">B19</label>
                                                            </li>
                                                        </ol>
                                                        <ol class="seats">
                                                            <li class="seat">
                                                                <input type="checkbox" id="b2" class="seat-checkbox" name="B2">
                                                                <label for="b2">B2</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="b4" class="seat-checkbox" name="B4">
                                                                <label for="b4">B4</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="b6" class="seat-checkbox" name="B6">
                                                                <label for="b6">B6</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="b8" class="seat-checkbox" name="B8">
                                                                <label for="b8">B8</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="b10" class="seat-checkbox" name="B10">
                                                                <label for="b10">B10</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="b12" class="seat-checkbox"
                                                                    class="checkbox" name="B12">
                                                                <label for="b12">B12</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="b14" class="seat-checkbox" name="B14">
                                                                <label for="b14">B14</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="b16" class="seat-checkbox" name="B16">
                                                                <label for="b16">B16</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="b18" class="seat-checkbox" name="B18">
                                                                <label for=" b18">B18</label>
                                                            </li>
                                                            <li class="seat">
                                                                <input type="checkbox" id="b20" class="seat-checkbox" name="B20">
                                                                <label for="b20">B20</label>
                                                            </li>
                                                        </ol>
                                                        <br>

                                                    </li>
                                                </ol>
                                             </div>   

                                             <div class="printValues">
                                                <p id="valueList"></p>
                                            </div> 
                                            
 <br>
                                            <div class="bus available">Available</div>
                                            <div class="bus chosen">Choose</div>
                                            <button class="btn btn-danger btn-xs mb-2">Booked</button>
                                            <br>
                                            <button class="btn btn-primary" type="submit"> Book Seat</button> 
            </div> 
                                       

         <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="grid-50">
                    <div id="seat-map">
                        <div class="front-indicator">Bus Seat Reservation</div>
                        <h4 class="text-muted fw-bold text-center" style="padding-left:3em; margin:.5em">From Front Row</h4>
                        <div id="bus-seat-map"></div>
                        <h4 class="text-muted fw-bold text-center" style="padding-left:3em; margin:.5em">End of Seat Row</h4>
                    </div>
                </div>
                <div class="grid-50">
                    <div class="booking-details">

                        <form action="abcd.php" method="post">

                            <h2>Booking Details</h2>

                            <h3> Selected Seats (<span id="counter">0</span>):</h3>
                            <ul id="selected-seats"></ul>

                            <h2>Total: <b>$<span id="total">0</span></b></h2>

                            <button type="button" id="checkout-button" value="submit" >Submit Book</button>

                        </form>

                        <div id="legend"></div>
                        <button id="reset-btn" type="button" >Reset Bus Seat</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../js/script.js"></script>
         
        
        
    -->














                        </form>
<?php include "../reservation/3a-reservation.php" ;    ?>

                    </div>
                </div>

            </div>

            </div>

            </div>
            </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <!-- <script>
                var valueList = document.getElementById('valueList');
                var text = '<span> You have selected: </span>';
                var listArray = [];

                var checkboxes = document.querySelectorAll('.seat-checkbox');

                for (var checkbox of checboxes) {
                    checkbox.addEventListner('click', function () {
                        if (this.checked == true) {
                            listArray.push(this.value);
                            valueList.innerHTML = text + listArray.join('/');
                        } else {
                            listArray = listArray.filter(e => e !== this.value)b1
                        }

                    })
                }

            </script> -->



        </body>

        </html>
        <?php
    }
}
?>