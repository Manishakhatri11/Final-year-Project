<?php
session_start();
include '../partial/dbconnect.php';

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM users WHERE user_id = '$id'";
    $query_run = mysqli_query($conn, $query); 

    if($query_run) {
        $_SESSION['success'] = "Your data has been deleted";
      
        
    }
    else {
        $_SESSION['status'] = "Failed to delete your data";
    }
    header('location: userview.php');
}
?>
