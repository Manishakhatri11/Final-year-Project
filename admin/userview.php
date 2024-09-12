<?php
 session_start();
include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/header.php';
include '../includes/script.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User</title>
</head>

<body>
    <style>
        .container {
            padding-left: 150px;
            padding-top: 100px;
        }

    </style>

    <div class="container    ">
        <!-- Button trigger modal -->
               
        <form action="" method="post">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                ADD USER
            </button>
        </form>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="useradd.php" method="post">

                            <div class="">
                                <label for=""> Enter User Name</label> <br>
                                <input class="form-control" id="username" type="text" name="username"
                                    placeholder="Enter User name" />

                            </div>

                            <div class="">
                                <label for="phone number">Phone Number</label>
                                <input class="form-control" id="phone" type="text" name="phone"
                                    placeholder="Enter  phone number" />

                            </div>

                            <div class="">
                                <label for="inputEmail">Email address</label>
                                <input class="form-control" id="inputEmail" type="email" name="email"
                                    placeholder="Enter  Email address" />

                            </div>

                            <div class="">
                                <label for="inputPassword">Password</label>
                                <input class="form-control" id="inputPassword" type="password" name="password"
                                    placeholder="Enter password" />

                            </div>
                            <div class="">
                                <label for="inputPassword">Confrim Password</label>
                                <input class="form-control" id="inputPassword" type="password" name="cpassword"
                                    placeholder="Re-enter password" />

                            </div>
                            <br>
                            <button class="btn btn-primary" type="submit"> Submit</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>


        <h2 style="display: block; text-align: center;   ">List of Users</h2>


        <?php
        require '../partial/dbconnect.php';



        $query = "SELECT *FROM users ";
        $query_run = mysqli_query($conn, $query);

        ?>



        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">password</th>
                    <th scope="col">Role </th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($query_run) > 0) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>
                        <tr>

                            <td>
                                <?php echo $row['user_id']; ?>
                            </td>
                            <td>
                                <?php echo $row['username']; ?>
                            </td>
                            <td>
                                <?php echo $row['email']; ?>
                            </td>
                            <td>
                                <?php echo $row['phone']; ?>
                            </td>
                            <td>
                                <?php echo $row['password']; ?>
                            </td>
                            <td>
                                <?php echo $row['usertype']; ?>
                            </td>
                            <td>


                                <!-- Button trigger modal -->
                                <form action="useredit.php" method="post">
                                    <input type="hidden" name="edit_id" value=" <?php echo $row['user_id']; ?>">
                                    <button type="submit" name="edit_btn" class="btn btn-success"> Edit</button>
                                </form>
                            </td>
                            <td>

                                <form action="userdelete.php" method="post">
                                    <input type="hidden" name="delete_id" value=" <?php echo $row['user_id']; ?>    ">
                                    <button type="submit" name="delete_btn" class="btn btn-danger"> Delete</button>
                                </form>

                            </td>
                        </tr>

                        <?php
                       
                    }
                } else {
                    echo "No record found";
                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>