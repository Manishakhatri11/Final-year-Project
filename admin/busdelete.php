<?php
session_start();

$showError = false;
$showSuccess = false;
include '../partial/dbconnect.php';

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM buses WHERE bus_id = '$id'";
    $query_run = mysqli_query($conn, $query); 

    if($query_run) {
        $_SESSION['success'] = "Your data has been deleted";
        $showSuccess = true;
        
    }
    else {
        $_SESSION['status'] = "Failed to delete your data";
        $showError = true;
    }
      header('location: buses.php');
}
?>

