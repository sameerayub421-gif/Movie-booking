<?php
include('../base/header.php');


$select_query = "
SELECT
movies.*,
AVG(reviews.rating) as avg_rating
FROM movies
INNER JOIN reviews
ON movies.movie_id = reviews.movie_id
GROUP BY movies.movie_id
HAVING avg_rating >= 3
ORDER BY avg_rating DESC
";

$result = mysqli_query($connection, $select_query);

?>

<section class="section-padding-100">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="section-heading text-center">

                    <p>Highest Rated Collection</p>

                    <h2>Top Rated Movies</h2>

                </div>

            </div>

        </div>

        <div class="row">

            <?php while($movie = mysqli_fetch_assoc($result)){ ?>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

                <div class="movie-card">

                    <div class="rating-badge">

                        ⭐
                        <?php echo round($movie['avg_rating'],1); ?>

                    </div>

                    <img src="../dashboard/uploads/<?php echo $movie['poster']; ?>">

                    <div class="p-3 text-center">

                        <h4>

                            <?php echo $movie['title']; ?>

                        </h4>

                        <p>

                            <?php echo $movie['genre']; ?>

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

<?php
include('../base/footer.php');
?>