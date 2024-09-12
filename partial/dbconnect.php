
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "e_bus_ticketing_system";

$conn = mysqli_connect($hostname, $username, $password, $database) or die ("Connection_Error");



// if(isset($_SESSION['success']) && $_SESSION['success'] != '') {
//     echo '<h2>'.$_SESSION['success'].'</h2>';
//     unset($_SESSION['success']);
// }


// if(isset($_SESSION['status']) && $_SESSION['status'] != '') {
//     echo '<h2 class="bg-info">'.$_SESSION['status'].'</h2>';
//     unset($_SESSION['success']);
// }





// customer ko backend code


// 

// if(isset($_POST['edit_btn']))
// {
//     $id = $_POST['edit_id'];
    
//     $query = "SELECT *FROM customers where Customer_ID = ' $id' ";
//     $query_run = mysqli_query($conn, $query); 
// }





// users ko delete function



// if(isset($_POST['delete_btn']))
// {
//     $id = $_POST['delete_id'];


//     // $query = "DELETE *FROM users WHERE id ='$id' ";
//     // $query_run = mysqli_query($conn,$query );

//     $query = "DELETE *FROM users where id = ' $id' ";
//     $query_run = mysqli_query($conn, $query); 

// }


// if($query_run) {
//     $_SESSION['success'] = "Your data is DELETED";
//     header('location: viewuser.php');
// }
// else {
//     $_SESSION['status'] = "Your data is NOT DELETED";
//     header('location: viewuser.php');
// }
?>
