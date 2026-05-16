<?php
include('../base/header.php');

$shows = null;

if(isset($_GET['show_date'])){

    $show_date = $_GET['show_date'];

    $select_query = "SELECT

    shows.*,
    movies.title,
    movies.poster,
    movies.genre,
    movies.duration,

    theaters.name as theater_name,
    screens.screen_name

    FROM shows

    INNER JOIN movies
    ON shows.movie_id = movies.movie_id

    INNER JOIN screens
    ON shows.screen_id = screens.screen_id

    INNER JOIN theaters
    ON screens.theater_id = theaters.theater_id

    WHERE DATE(shows.show_date) = '$show_date'

    ORDER BY shows.start_time ASC";

    $shows = mysqli_query($connection, $select_query);
}
?>

<style>

body{
    background:#000;
    color:#fff;
    font-family:Arial;
}

.date-container{
    width:90%;
    margin:auto;
    padding:50px 0;
}

.page-title{
    text-align:center;
    margin-bottom:40px;
}

.page-title h1{
    color:#E50914;
}

.search-box{
    background:#111;
    padding:30px;
    border-radius:10px;
    margin-bottom:40px;
    text-align:center;
}

.search-box input{
    width:300px;
    padding:12px;
    border:none;
    border-radius:5px;
    background:#222;
    color:#fff;
}

.search-btn{
    padding:12px 25px;
    background:#E50914;
    border:none;
    color:#fff;
    border-radius:5px;
    margin-left:10px;
}

.movie-card{
    background:#111;
    border:2px solid #E50914;
    border-radius:10px;
    padding:20px;
    margin-bottom:25px;
    display:flex;
    gap:20px;
    align-items:center;
}

.movie-card img{
    width:140px;
    height:180px;
    object-fit:cover;
    border-radius:10px;
}

.movie-details{
    flex:1;
}

.movie-details h3{
    color:#E50914;
    margin-bottom:15px;
}

.info{
    margin-bottom:10px;
}

.info span{
    color:#E50914;
    font-weight:bold;
}

.book-btn{
    display:inline-block;
    margin-top:15px;
    padding:10px 20px;
    background:#E50914;
    color:#fff;
    text-decoration:none;
    border-radius:5px;
}

.no-show{
    background:#111;
    padding:30px;
    border-radius:10px;
    text-align:center;
    border:2px solid #E50914;
}

</style>

<div class="date-container">

    <div class="page-title">

        <h1>
            Search Shows By Date
        </h1>

        <p>
            Find Movies Available On Your Selected Date
        </p>

    </div>

    <!-- SEARCH FORM -->

    <div class="search-box">

        <form method="GET">

            <input type="date"
                   name="show_date"
                   required>

            <button type="submit"
                    class="search-btn">

                Search

            </button>

        </form>

    </div>

    <!-- SHOW RESULT -->

    <?php

    if(isset($_GET['show_date'])){

        if(mysqli_num_rows($shows) > 0){

            while($show = mysqli_fetch_assoc($shows)){

    ?>

    <div class="movie-card">

        <img src="../dashboard/uploads/<?php echo $show['poster']; ?>">

        <div class="movie-details">

            <h3>

                <?php echo $show['title']; ?>

            </h3>

            <div class="info">

                <span>Genre :</span>

                <?php echo $show['genre']; ?>

            </div>

            <div class="info">

                <span>Duration :</span>

                <?php echo $show['duration']; ?> Min

            </div>

            <div class="info">

                <span>Theater :</span>

                <?php echo $show['theater_name']; ?>

            </div>

            <div class="info">

                <span>Screen :</span>

                <?php echo $show['screen_name']; ?>

            </div>

            <div class="info">

                <span>Show Time :</span>

                <?php echo $show['start_time']; ?>

            </div>

            <a href="../book-ticket/booking.php?movie_id=<?php echo $show['movie_id']; ?>"
               class="book-btn">

               Book Now

            </a>

        </div>

    </div>

    <?php

            }

        }else{

    ?>

    <div class="no-show">

        <h3>
            No Shows Available
        </h3>

        <p>
            No Movie Found On Selected Date
        </p>

    </div>

    <?php

        }

    }

    ?>

</div>

<?php
include('../base/footer.php');
?>