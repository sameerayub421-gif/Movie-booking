<?php
include('../base/header.php');

$select_query = "SELECT * FROM theaters";
$result = mysqli_query($connection, $select_query);
?>

<section class="breadcumb-area bg-img bg-overlay" style="background-image: url('<?php echo $base_url; ?>img/bg-img/breadcumb.jpg');">
    <div class="bradcumbContent">
        <p>Best Cinema Experience</p>
        <h2>All Theaters</h2>
    </div>
</section>

<section class="section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading style-2">
                    <p>Explore all available cinemas</p>
                    <h2>All Theaters</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php while($theater = mysqli_fetch_array($result)){ ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-30">
                <div class="single-event-area">
                    <div class="event-text">
                        <h4>🎭 <?php echo $theater['name']; ?></h4>
                        
                        <div class="event-meta-data">
                            <a href="#" class="event-place">
                                📍 <?php echo $theater['location']; ?>
                            </a>
                        </div>

                        <p>
                            🎬 Screens: <?php echo $theater['total_screens']; ?>
                        </p>

                        <p>
                            Premium sound system & AC Halls
                        </p>

                        <a href="theater-movie.php?id=<?php echo $theater['theater_id']; ?>" class="btn oneMusic-btn mt-20">
                            View Movies
                            <i class="fa fa-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php
include('../base/footer.php');
?>