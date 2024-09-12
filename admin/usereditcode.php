<?php
session_start();

if (isset($_POST['updatebtn'])) {
    $id = $_POST['edit_id'];
    $uusername = $_POST['edit_username'];
    $phone = $_POST['edit_phone'];
    $email = $_POST['edit_email'];
    // $upassword = $_POST['edit_password'];

    // Regular expression patterns for validation
    // $usernamePattern = "/^[a-zA-Z0-9_-]{3,20}$/";
    // $phonePattern = "/^\d{10}$/";
    // $emailPattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
    // // $passwordPattern = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()-=_+{};:,<.>]).{8,}$/";

    // if (!preg_match($usernamePattern, $uusername)) {
    //     $_SESSION['status'] = "Invalid username format";
    //     header('location: userwiew.php');
    //     exit;
    // }

    // if (!preg_match($phonePattern, $phone)) {
    //     $_SESSION['status'] = "Invalid phone number format";
    //     header('location: userwiew.php');
    //     exit;
    // }

    // if (!preg_match($emailPattern, $email)) {
    //     $_SESSION['status'] = "Invalid email format";
    //     header('location: userwiew.php');
    //     exit;
    // }

    // to update the code 

    include '../partial/dbconnect.php';

    $query = "UPDATE users SET username='$uusername', phone='$phone', email='$email' WHERE user_id='$id'";
    $query_run = mysqli_query($conn, $query);
    $query_run = mysqli_query($conn, $query);


    if ($query_run) {
        $_SESSION['success'] = "Your Data is updated";
        header('location: userview.php');
    } else {
        $_SESSION['status'] = "Your Data is not updated";
        header('location: userwiew.php');
    }
}
?>