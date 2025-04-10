<?php 
include 'conn.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = mysqli_query($conn, "SELECT * FROM `movies` WHERE `id` = $id");
    $fetch = mysqli_fetch_array($query);
}

if (isset($_POST['add_movie'])) {
    $id = $_POST['id'];
    $image_name = $_FILES['poster_url']['name'];
    $image_temp = $_FILES['poster_url']['tmp_name'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $rating = floatval($_POST['rating']);
    $gp_rating = $_POST['gp_rating'];
    $runtime = $_POST['runtime'];
    $trailer_url = $_POST['trailer_url'];
    $starring = $_POST['starring'];
    $tags = $_POST['tags'];
    $genres = $_POST['genres'];

    $exp = explode(".", $image_name);
    $ext = strtolower(end($exp));
    $name = time() . "." . $ext;
    $path = "upload/" . $name;
    $allowed_ext = array("jpeg", "jpg", "gif", "jfif", "png");

    if (in_array($ext, $allowed_ext)) {
        if (move_uploaded_file($image_temp, $path)) {
            $update_query = "UPDATE `movies` SET 
                `id` = '$id',
                `title` = '$title', 
                `description` = '$description', 
                `rating` = '$rating', 
                `GP_rating` = '$gp_rating', 
                `runtime` = '$runtime', 
                `trailer_url` = '$trailer_url', 
                `poster_url` = '$path', 
                `starring` = '$starring', 
                `Genres` = '$genres', 
                `Tags` = '$tags' 
                WHERE `id` = $id";

            $result = mysqli_query($conn, $update_query);

            if ($result) {
                echo "<script>alert('Movie updated successfully!');</script>";
                echo "<script>window.location.href='index.php'</script>";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    } else {
        echo "<script>alert('Invalid file format. Only JPG, JPEG, PNG, GIF are allowed.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>


      <!-- Form Start -->
            <div class="container-fluid mt-5 d-flex justify-content-center align-items-center">
                <div class="row ">
                    <div class="col col-lg-12" style="width: 50vw;">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Add movie</h6>
                            <form action="" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">id</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="<?php echo $fetch['id']; ?>" name="id">
                                    
                                </div>
                            <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="<?php echo $fetch['title']; ?>" name="title">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Description</label>
                                    <input type="text" class="form-control" style="height: 100px;" id="exampleInputPassword1" value="<?php echo $fetch['description']; ?>" name="description">  
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Rating</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="<?php echo $fetch['rating']; ?>" name="rating">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">GP_rating</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="<?php echo $fetch['GP_rating']; ?>" name="gp_rating">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Runtime</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="<?php echo $fetch['runtime']; ?>" name="runtime">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Trailer_URL</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="<?php echo $fetch['trailer_url']; ?>" name="trailer_url">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Poster_URL</label>
                                    <input type="file" value="<?php echo $fetch['poster_url']; ?>" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="poster_url">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Starring</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="<?php echo $fetch['starring']; ?>" name="starring">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Genres</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="<?php echo $fetch['Genres']; ?>" name="genres">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tags</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="<?php echo $fetch['Tags']; ?>" name="tags">
                                </div>
                                <button type="submit" name="add_movie" class="btn btn-primary">Add Movie</button>
                            </form>
                        </div>
                    </div>
            </div>
            <!-- Form End -->
</body>
</html>
