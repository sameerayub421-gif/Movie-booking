<?php
include('../base/header.php');

$select_query = "SELECT * FROM movies ORDER BY movie_id DESC";
$result = mysqli_query($connection, $select_query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">

<style>

body{
    margin:0;
    background:#000;
    font-family:Arial;
}

h1{
    text-align:center;
    margin:30px 0;
    color:#ffffff;
}

.search-box{
    text-align:center;
    margin-bottom:30px;
}

select{
    padding:10px;
    width:250px;
    border:1px solid #E50914;
    outline:none;
    background:#111;
    color:#fff;
}

.container{
    width:100%;
    display:flex;
    justify-content:center;
    flex-wrap:wrap;
    gap:20px;
    padding-bottom:50px;
}

/* FIXED */
.card{
    width:280px;
    background:#111;
    border:2px solid #E50914;
    text-align:center;
    border-radius:10px;
    overflow:hidden;
    display:none;
    box-shadow:0 0 10px rgba(0,0,0,0.3);
    position:relative;
    transition:0.3s;
}

.card:hover{
    transform:translateY(-5px);
    box-shadow:0 8px 20px rgba(0,0,0,0.5);
}

.card img{
    width:100%;
    height:400px;
    object-fit:cover;
}

.badge{
    position:absolute;
    top:10px;
    left:10px;
    background:red;
    color:#fff;
    padding:4px 8px;
    font-size:11px;
    border-radius:5px;
}

.card h3{
    margin:10px 0 5px 0;
    color:#ffffff;
}

.genre{
    font-size:13px;
    color:#cccccc;
}

.rating{
    margin-top:5px;
    font-size:13px;
    color:#f39c12;
}

.time{
    font-size:12px;
    color:#cccccc;
    margin-bottom:5px;
}

.book-btn{
    display:inline-block;
    margin:10px 0 15px;
    padding:8px 12px;
    background:#E50914;
    border:1px solid #E50914;
    color:#fff;
    text-decoration:none;
    transition:0.3s;
    border-radius:5px;
}

.book-btn:hover{
    background:#b20710;
    color:#fff;
}

.no-movie{
    width:100%;
    text-align:center;
    color:#999;
    margin-top:30px;
    font-size:18px;
}

</style>
</head>


<h1>Select Movie</h1>

<div class="search-box">

    <select id="movieSelect" onchange="showMovie()">

        <option value="">-- Select Movie --</option>

        <?php while($movie = mysqli_fetch_array($result)){ ?>

            <option value="movie<?php echo $movie['movie_id']; ?>">

                <?php echo $movie['title']; ?>

            </option>

        <?php } ?>

    </select>

</div>

<?php mysqli_data_seek($result, 0); ?>

<div class="container">

    <div class="no-movie" id="noMovie">

        Please Select A Movie

    </div>

<?php while($movie = mysqli_fetch_array($result)){ ?>

    <div class="card"
         id="movie<?php echo $movie['movie_id']; ?>">

        <span class="badge">

            Now Booking

        </span>

        <img src="../dashboard/uploads/<?php echo $movie['poster']; ?>">

        <h3>

            <?php echo $movie['title']; ?>

        </h3>

        <p class="genre">

            <?php echo $movie['genre']; ?>

        </p>

        <p class="rating">

            ⭐ 5/5

        </p>

        <p class="time">

            ⏱ <?php echo $movie['duration']; ?> Min

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

<?php } ?>

</div>

<script>

function showMovie(){

    let value =
    document.getElementById("movieSelect").value;

    let cards =
    document.querySelectorAll(".card");

    let noMovie =
    document.getElementById("noMovie");

    cards.forEach(card => {

        card.style.display = "none";

    });

    if(value){

        document.getElementById(value).style.display = "block";

        noMovie.style.display = "none";

    }else{

        noMovie.style.display = "block";

    }

}

</script>


<?php
include('../base/footer.php');
?>