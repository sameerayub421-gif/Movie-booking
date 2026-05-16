<?php 
session_start();
include('/movie-booking-master/dashboard/config/db_connection.php');

$base_url = "/movie-booking-master/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Online Movie Booking System</title>

<link rel="icon" href="<?php echo $base_url; ?>img/core-img/favicon.ico">

<link rel="stylesheet" href="<?php echo $base_url; ?>style.css?v=<?php echo time(); ?>">
</head>

<body>

<header class="header-area">

    <div class="oneMusic-main-menu">

        <div class="classy-nav-container breakpoint-off">

            <div class="container">

                <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                    <a href="<?php echo $base_url; ?>index.php" class="nav-brand">
                        <img src="<?php echo $base_url; ?>img/core-img/logo.png" alt="">
                    </a>

                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>

                    <div class="classy-menu">

                        <div class="classycloseIcon">
                            <div class="cross-wrap">
                                <span class="top"></span>
                                <span class="bottom"></span>
                            </div>
                        </div>

                        <div class="classynav">

                            <ul>

                                <li>
                                    <a href="<?php echo $base_url; ?>index.php">Home</a>
                                </li>

                                <li>
                                    <a href="#">Movies</a>

                                    <ul class="dropdown">
                                        <li><a href="<?php echo $base_url; ?>movies/all-movies.php">All Movies</a></li>
                                        <li><a href="<?php echo $base_url; ?>movies/now-showing.php">Now Showing</a></li>
                                        <li><a href="<?php echo $base_url; ?>movies/coming-soon.php">Coming Soon</a></li>
                                        <li><a href="<?php echo $base_url; ?>movies/top-rated.php">Top Rated</a></li>
                                    </ul>

                                </li>

                                <li>
                                    <a href="#">Theaters</a>

                                    <ul class="dropdown">
                                        <li><a href="<?php echo $base_url; ?>theaters/all-theater.php">All Theaters</a></li>
                                        <li><a href="<?php echo $base_url; ?>theaters/nearby-theaters.php">Nearby Theaters</a></li>
                                    </ul>

                                </li>

                                <li>
                                    <a href="#">Shows</a>

                                    <ul class="dropdown">
                                        <li><a href="<?php echo $base_url; ?>show/all-shows.php">All Shows</a></li>
                                        <li><a href="<?php echo $base_url; ?>show/today-shows.php">Today Shows</a></li>
                                    </ul>

                                </li>

                                <li>
                                    <a href="#">Book Ticket</a>

                                    <ul class="dropdown">
                                        <li><a href="<?php echo $base_url; ?>book-ticket/by-movie.php">By Movie</a></li>
                                        <li><a href="<?php echo $base_url; ?>book-ticket/by-date.php">By Date</a></li>
                                        <li><a href="<?php echo $base_url; ?>book-ticket/by-theater.php">By Theater</a></li>
                                    </ul>

                                </li>

                                <li>
                                    <a href="#">Reviews</a>

                                    <ul class="dropdown">
                                        <li><a href="<?php echo $base_url; ?>reviews/movie-review.php">Movie Reviews</a></li>
                                        <li><a href="<?php echo $base_url; ?>reviews/user-ratings.php">User Ratings</a></li>
                                    </ul>

                                </li>

                                <li>
                                    <a href="#">Account</a>

                                    <ul class="dropdown">
                                        <li><a href="<?php echo $base_url; ?>account/my-profile.php">My Profile</a></li>
                                        <li><a href="<?php echo $base_url; ?>account/my-bookings.php">My Bookings</a></li>
                                        <li><a href="<?php echo $base_url; ?>account/payment-history.php">Payment History</a></li>
                                        <li><a href="<?php echo $base_url; ?>account/logout.php">Logout</a></li>
                                    </ul>

                                </li>

                              

                            </ul>

                        </div>

                    </div>

                </nav>

            </div>

        </div>

    </div>

</header>