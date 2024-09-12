
<?php
session_start();

if ($_SESSION['loggedin'] == '')
{
    header("location:   ../login.php");
}
?>


<nav class="sb-topnav navbar navbar-expand navbar-primary bg-light">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="user.php"> Online bus ticket</a>
                       
            <ul class="navbar-nav form-inline ms-auto me-0 me-md-3 my-2 my-md-0 ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../userpannel/viewuser.php">My Account</a></li>
                        <li><a class="dropdown-item" href="#!"></a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
         
        </nav>
        <!-- <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-primary " id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="viewuser.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                View Profile
                            </a>
                            <a class="nav-link" href="viewbus.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            View Bus Details
                            </a>
                            <a class="nav-link" href="viewroutes.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                              View Routes Detail
                            </a>
                            <a class="nav-link" href="bookticket_example.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Booking online ticket
                            </a>
                          
                            <a class="nav-link" href="viewticket.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               View Your Ticket
                            </a>
                            <a class="nav-link" href="cancelticket.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Cancel Your Ticket
                            </a>
                            <a class="nav-link" href="../logout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Logout
                            </a>
                            
                    <div class="sb-sidenav-footer my-5">
                        <div class="small">Logged in as:<?php //  echo $_SESSION['username'] ?></div>
                       
                    </div>
                </nav> 
                </div> -->

                