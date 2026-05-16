<?php
include('../base/header.php');

$movies_query = "SELECT * FROM movies ORDER BY movie_id DESC";
$movies_result = mysqli_query($connection, $movies_query);
?>

<section class="now-showing-area section-padding-100">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="section-heading style-2">
                    <p>Check out what's playing</p>
                    <h2>Now Showing</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <?php while($movie = mysqli_fetch_array($movies_result)){ ?>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                <div class="single-movie-card mb-30">

                    <div class="movie-poster">

                        <img src="../dashboard/uploads/<?php echo $movie['poster']; ?>"
                             alt="<?php echo $movie['title']; ?>">

                    </div>

                    <div class="movie-info">

                        <h5><?php echo $movie['title']; ?></h5>

                        <p class="genre">
                            <?php echo $movie['genre']; ?>
                        </p>

                        <p class="duration">
                            <?php echo $movie['duration']; ?> Min
                        </p>

                        <div class="rating">
                            ⭐⭐⭐⭐⭐
                        </div>

                    <div class="mt-3">

<a href="../book-ticket/book-now.php?movie_id=<?php echo $movie['movie_id']; ?>"
class="btn oneMusic-btn">

Book Now

</a>

<a href="<?php echo $movie['trailer_url']; ?>"
target="_blank"
class="btn btn-danger ml-2">

View Trailer

</a>

</div>

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