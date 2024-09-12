<?php

include '../userinclude/header.php';
include '../userinclude/navbar.php';
include '../userinclude/footer.php';
include '../userinclude/script.php';

?>
   <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-primary " id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="viewuser.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                View Profile
                            </a>
                            <!-- <a class="nav-link" href="viewbus.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            View Bus Details
                            </a> -->
                            <!-- <a class="nav-link" href="viewroutes.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                              View Routes Detail
                            </a> -->
                            <!-- <a class="nav-link" href="bookticket_example.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Booking online ticket
                            </a> -->
                          
                            <!-- <a class="nav-link" href="viewticket.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               View Your Ticket
                            </a> -->
                            <!-- <a class="nav-link" href="cancelticket.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Cancel Your Ticket
                            </a> -->
                            <a class="nav-link" href="../logout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Logout
                            </a>
                            
                    <div class="sb-sidenav-footer my-5">
                        <div class="small">Logged in as:<?php  echo $_SESSION['username'] ?></div>
                    </div>
                </nav> 
                </div>
                