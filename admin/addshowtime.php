<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <!-- Form Start -->
            <div class="container-fluid mt-5 d-flex justify-content-center align-items-center">
            <div class="col-sm-12 col-xl-6">

                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Add Showtime</h6>
                            <form action="" method="post">
                            <!-- Movie Selection -->
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelectMovie" name="movie_showtime" required>
                                    <option selected disabled>Select Movie for Showtime</option>
                                    <?php 
                                    include 'conn.php';
                                    $query = mysqli_query($conn, "SELECT id, title FROM `movies`");
                                    while($fetch = mysqli_fetch_array($query)){
                                    ?>
                                    <option value="<?php echo $fetch['id']; ?>"><?php echo $fetch['title']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <label for="floatingSelectMovie">Select Movie</label>
                            </div>
                            
                            <!-- Theatre Selection -->
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelectTheatre" name="theatre_showtime" required>
                                    <option selected disabled>Select Theatre for Showtime</option>
                                    <?php 
                                    include 'conn.php';
                                    $query = mysqli_query($conn, "SELECT id, name FROM `theaters`");
                                    while($fetch = mysqli_fetch_array($query)){
                                    ?>
                                    <option value="<?php echo $fetch['id']; ?>"><?php echo $fetch['name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <label for="floatingSelectTheatre">Select Theatre</label>
                            </div>
                            
                            <!-- Show Date -->
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInputDate" name="showdate" required>
                                <label for="floatingInputDate">Show Date</label>
                            </div>
                            
                            <!-- Show Time -->
                            <div class="form-floating mb-3">
                                <input type="time" class="form-control" id="floatingInputTime" name="showtime" required>
                                <label for="floatingInputTime">Show Time</label>
                            </div>
                            
                            <!-- Class Type -->
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelectClass" name="class_type" required>
                                    <option selected disabled>Select Class Type</option>
                                    <option value="Economy">Standard</option>
                                    <option value="Premium">Premium</option>
                                    <option value="VIP">VIP</option>
                                </select>
                                <label for="floatingSelectClass">Class Type</label>
                            </div>
                            
                            <!-- Ticket Price -->
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingInputPrice" name="ticket_price" placeholder="Enter ticket price" required>
                                <label for="floatingInputPrice">Ticket Price</label>
                            </div>
                            
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary" name="add_showtime">Add Showtime</button>
                            </form>
                        </div>
                    </div>
            </div>
            <!-- Form End -->
</body>
</html>
<?php
include 'conn.php';

if(isset($_POST['add_showtime'])){
    $movie_showtime = $_POST['movie_showtime'];
    $theatre_showtime = $_POST['theatre_showtime'];
    $showdate = $_POST['showdate'];
    $showtime = $_POST['showtime'];
    $class_type = $_POST['class_type'];
    $ticket_price = $_POST['ticket_price'];
    $created_at = date('Y-m-d H:i:s'); // Capture the current timestamp

    // Insert the showtime details into the database
    $query = mysqli_query($conn, "INSERT INTO `showtime`(`movie_id`, `theatre_id`, `show_date`, `show_time`, `class_type`, `price`, `created_at`) VALUES ('$movie_showtime', '$theatre_showtime', '$showdate', '$showtime', '$class_type', '$ticket_price', '$created_at')");
    
    if($query){
       echo "<script>window.location.href='showtime.php'</script>"; // Redirect after successful insertion
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
