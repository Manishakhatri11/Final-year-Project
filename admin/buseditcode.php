<?php
session_start();

if (isset($_POST['updatebtn'])) {
    $id = $_POST['edit_id'];
    $busNumber = $_POST['bus_number'];
    $busDescription = $_POST['bus_description'];
    $depatureTime = $_POST['departure_time'];
    $reachTime = $_POST['reach_time'];

    include '../partial/dbconnect.php';
    
    //  $query = "UPDATE buses SET bus_number='$busNumber', bus_description='$busDescription', depature_time='$depatureTime', reach_time='$reachTime' WHERE bus_id='$id'";
    $query = "UPDATE buses SET bus_number='$busNumber', bus_description='$busDescription', departure_time='$depatureTime', reach_time='$reachTime' WHERE bus_id='$id'";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['success'] = "Your Data is updated";
        header('location: buses.php');
    } else {
        $_SESSION['status'] = "Your Data is not updated";
        header('location: buses.php');
    }
}
?>