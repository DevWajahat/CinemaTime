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
                                    <label for="exampleInputEmail1" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="title">
                                    
                                        <div class="mb-3">
                                         <label for="exampleInputPassword1" class="form-label">Description</label>
                                           <textarea class="form-control" id="exampleInputPassword1" name="description" style="height: 100px;"></textarea>  
                                        </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Rating</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="rating">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Runtime</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="runtime">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Trailer_URL</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="trailer_url">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Poster_URL</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="poster_url">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Starring</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="starring">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Genres</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="genres">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tags</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="tags">
                                </div>
                                <button type="submit" name="add_movie" class="btn btn-primary">Add Movie</button>
                            </form>
                        </div>
                    </div>
            </div>
            <!-- Form End -->
</body>
</html>
<?php
    include 'conn.php';
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if (isset($_POST['add_movie'])){
    $image_name = $_FILES['poster_url']['name'];
    $image_temp = $_FILES['poster_url']['tmp_name'];
    $title = $_POST ['title'];
    $description = $_POST ['description'];
    $rating = $_POST ['rating'];
    $rating= floatval($rating);


    $trailer_url = $_POST ['trailer_url'];
    // $description = $_POST ['description'];
    $starring = $_POST ['starring'];
    $tags = $_POST ['tags'];
    $genres = $_POST['genres'];
    // $description = $_POST ['description'];

    $exp = explode(".",$image_name);
    $ext = end($exp);
    $name = time(). ".".$ext;
    $path = "upload/".$name;
    $allowed_ext = array ("jpeg", "jpg", "gif","jfif", "png","PNG","JPEG","JPG", "JFIF",);
    if (in_array($ext, $allowed_ext)){
        if(move_uploaded_file($image_temp,$path)){
            mysqli_query($conn, "INSERT INTO `movies`(`id`, `title`, `description`, `rating`, `trailer_url`, `poster_url`, `starring`, `Genres`, `Tags`) VALUES (NULL, '$title', '$description', '$rating' ,'$trailer_url', '$path', '$starring', '$genres', '$tags')");

            echo "<script> alert('User account saved!); </script>";
            // header("location: index.php");
            echo "<script>window.location.href='index.php'</script>";
        }
    }
    else{
        echo "<script> alert('Invalid file format. Only JPG, JPEG, PNG, GIF are allowed.'); </script>";
    }
}
// error_reporting(0);
 ?>
