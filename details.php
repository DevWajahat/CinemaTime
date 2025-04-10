
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Details</title>
    <!-- Add your CSS and JS files here -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php
    session_start();
    // Check if the user is logged in
    if (!isset($_SESSION['username'])) {
        // Redirect to the login page
        header("Location: login.php");
        exit(); // Ensure no further code is executed
    }

    include 'conn.php';

    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);

        // Fetch movie details
        $query = mysqli_query($conn, "SELECT * FROM movies WHERE id = $id");
        $movie = mysqli_fetch_assoc($query);

        if (!$movie) {
            echo "Movie not found.";
            exit();
        }
    } else {
        echo "No movie selected.";
        exit();
    }

    include 'header.php';
    ?>

    <!-- parallax section  -->
    <section id="parallex" class="parallax-window" style="height:100vh; background:url('admin/<?php echo htmlspecialchars($movie['poster_url']);  ?>') !important;background-repeat:no-repeat;">
    <div class="container-fluid h-100">
        <div class="row align-items-center justify-content-center h-100 parallaxt-details">
            <div class="col-lg-4 r-mb-23">
                <div class="text-left">
                    <a href="javascript:void(0)">
                        <h1 class="parallax-heading"><?php echo htmlspecialchars($movie['title']); ?></h1>
                    </a>
                    <div class="parallax-ratting d-flex align-items-center mt-3 mb-3">
                        <ul class="ratting-start p-o m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                            <!-- Display stars based on movie rating -->
                            <?php
                            $rating = $movie['rating']; // Use 'rating' for movie rating
                            $fullStars = floor($rating);
                            $halfStar = ($rating - $fullStars) >= 0.5 ? 1 : 0;
                            $emptyStars = 5 - ($fullStars + $halfStar);

                            // Display full stars
                            for ($i = 0; $i < $fullStars; $i++) {
                                echo '<li><a href="#" class="text-primary"><i class="fa fa-star"></i></a></li>';
                            }
                            // Display half star if needed
                            if ($halfStar) {
                                echo '<li><a href="#" class="text-primary"><i class="fa fa-star-half-o"></i></a></li>';
                            }
                            // Display empty stars
                            for ($i = 0; $i < $emptyStars; $i++) {
                                echo '<li><a href="#" class="text-primary"><i class="fa fa-star-o"></i></a></li>';
                            }
                            ?>
                        </ul>
                        <span class="text-white ml-3"><?php echo htmlspecialchars($rating); ?> (IMDB)</span>
                    </div>
                    <div class="movie-time d-flex align-items-center mb-3">
                        <div class="badge badge-secondary p-1 mr-2"><?php echo htmlspecialchars($movie['GP_rating']); ?>+</div>
                        <span class="text-white"><?php echo htmlspecialchars($movie['runtime']); ?></span>
                    </div>
                    <p><?php echo htmlspecialchars($movie['description']); ?></p>
                    <div class="parallax-buttons">
                    <a href="book.php?id=<?php echo htmlspecialchars($movie['id']); ?>" class="btn btn-hover">
    <span class="material-symbols-outlined" style="vertical-align: middle;">theaters</span>Book Now
</a>

                    
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="parallax-img">
                    <a href="#"><img src="admin/<?php echo htmlspecialchars($movie['poster_url']); ?>" alt="" class="img-fluid w-100" /></a>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- JS files -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/slick-animation.min.js"></script>
    <script src="main.js"></script>
</body>
</html>
