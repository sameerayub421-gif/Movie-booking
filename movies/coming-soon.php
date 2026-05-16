<?php
include('../base/header.php');

$movies_query = "SELECT * FROM movies WHERE release_date > CURDATE() ORDER BY release_date ASC";
$movies_result = mysqli_query($connection, $movies_query);
?>

<section class="breadcumb-area bg-img bg-overlay"
style="background-image: url('../img/bg-img/breadcumb.jpg');">

    <div class="bradcumbContent">
        <p>Upcoming Blockbuster Movies</p>
        <h2>Coming Soon</h2>
    </div>

</section>

<section class="now-showing-area section-padding-100">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="section-heading style-2">
                    <p>Check upcoming movies</p>
                    <h2>Coming Soon Movies</h2>
                </div>

            </div>

        </div>

        <div class="row">

            <?php while($movie = mysqli_fetch_array($movies_result)){ ?>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                <div class="single-movie-card mb-30">

                    <span class="badge-soon">
                        Soon
                    </span>

                    <div class="movie-poster">

                        <img src="../dashboard/uploads/<?php echo $movie['poster']; ?>"
                             alt="<?php echo $movie['title']; ?>">

                    </div>

                    <div class="movie-info">

                        <h5>
                            <?php echo $movie['title']; ?>
                        </h5>

                        <p class="genre">
                            <?php echo $movie['genre']; ?>
                        </p>

                        <p class="release-date">
                            Release:
                            <?php echo $movie['release_date']; ?>
                        </p>

                        <p class="duration">
                            <?php echo $movie['duration']; ?> Min
                        </p>

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

<section class="about-section">

    <div class="container">

        <div class="about-box">

            <h2>About Coming Soon Movies</h2>

            <p>
                Our Online Movie Booking System helps users discover upcoming blockbuster movies before release.
                Stay updated with release dates, genres, trailers, and pre-booking options.
            </p>

            <p>
                From action and thriller to romance and sci-fi, all upcoming movies are listed here for movie lovers.
            </p>

            <h3>Why Use This Section?</h3>

            <ul>
                <li>Check upcoming movie releases</li>
                <li>Pre-book movie tickets</li>
                <li>Explore movie genres and details</li>
                <li>Stay updated with new cinema releases</li>
            </ul>

        </div>

    </div>

</section>

<?php
include('../base/footer.php');
?>