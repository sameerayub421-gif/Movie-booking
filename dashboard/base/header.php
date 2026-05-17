<?php 
session_start();
include(__DIR__ . '/../config/db_connection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
      

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-film me-2"></i>Movie Admin</h3>
                </a>

                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" style="width:40px;height:40px;">
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Admin</h6>
                        <span>Administrator</span>
                    </div>
                </div>

                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-film me-2"></i>Movies</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="manage-movies.php" class="dropdown-item">Manage Movies</a>
                            <a href="reviews.php" class="dropdown-item">Movie Reviews</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-building me-2"></i>Theaters</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="manage-theaters.php"
                                class="dropdown-item">Manage Theaters</a>
                            <a href="manage-screens.php"
                                class="dropdown-item">Manage Screens</a>
                            <a href="manage-shows.php"
                                class="dropdown-item">Manage Shows</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-ticket-alt me-2"></i>Bookings</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="all-booking.php" class="dropdown-item">All
                                Bookings</a>
                            <a href="payments.php"
                                class="dropdown-item">Payments</a>
                            <a href="manage-users.php"
                                class="dropdown-item">Manage Users</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-cogs me-2"></i>Cenima system
                        </a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="manage-seats.php"
                                class="dropdown-item">Manage Seats</a>
                            <a href="manage-seat-categories.php"
                                class="dropdown-item">Seat Categories</a>
                            <a href="manage-show-prices.php"
                                class="dropdown-item">Show Prices</a>
                            <a href="manage-concessions.php"
                                class="dropdown-item">Concessions</a>
                        </div>
                    </div>

                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-sign-out-alt me-2"></i>Logout</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-user me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">account</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="./my-profile.php" class="dropdown-item">My Profile</a>
                            <a href="./logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
