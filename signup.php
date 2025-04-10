<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- i will provide this in description  -->
  <link rel="stylesheet" href="css/slick.css" />
  <link rel="stylesheet" href="css/slick-theme.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/animate.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/select2.min.css" />
  <link rel="stylesheet" href="css/select2-bootstrap4.min.css" />

  <link rel="stylesheet" href="css/slick-animation.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="admincss/style.css">
  <link rel="stylesheet" href="admincss/bootstrap.min.css">
</head>
<body>
    <style>
        body{
            background-image: url('images/download.jfif');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            /* opacity: 20%; */
        }
.parent-container{
    width: 100vw;
    height: 100vh;
    backdrop-filter: blur(10px);
}
.login-container {
    /* height: ; */
    background-color: #181818;
    box-shadow: 8px 8px 16px #0e0e0e, -8px -8px 16px #202020;
    border-radius: 15px;
    max-width: 400px;
    width: 100%;
}

.input-group input {
    background-color: #181818;
    border: none;
    box-shadow: inset 8px 8px 16px #0e0e0e, inset -8px -8px 16px #202020;
    color: #ffffff;
    border-radius: 10px;
    padding: 10px 15px;
}

.input-group input::placeholder {
    color: #a0a0a0;
}

.btn-dark {
    background-color: #252525;
    color: #ffffff;
    border-radius: 10px !important;
    box-shadow: 8px 8px 16px #0e0e0e, -8px -8px 16px #202020;
    border: none;
    /* border: ; */
}

.btn-dark:hover {
    background-color: #1f1f1f;
}
    </style>
<div class="parent-container container-fluid d-flex justify-content-center align-items-center min-vh-100">
        <div class="login-container p-4 rounded">
            <h2 class=" text-center text-light text-danger mb-4" style="color:red !important; font-weight:800;">Signup</h2>
            <form action="" method="post">
                <div class="mb-3 input-group " style="color:red !important;">
                    <input name="username" type="text" style="color:red !important; "class=" form-control" placeholder="Username" required>
                </div>
                <div class="mb-3 input-group " style="color:red !important;">
                    <input name="email" type="text" style="color:red !important; "class=" form-control" placeholder="Email" required>
                </div>
                <div class="mb-3 input-group " style="color:red !important;">
                    <input name="age" type="number" style="color:red !important; "class=" form-control" placeholder="age" required>
                </div>
                <div class="mb-4 input-group">
                    <input type="password" style="color:red !important;" name="password" class="form-control" placeholder="Password" required>
                </div>

                <button type="submit" name="signup" style="margin-left:150px;  border-radius: 5px !important;" class="mr-2 text-align-center btn btn-primary " fdprocessedid="8llbq8">Signup</button>
               <br><br> <span style="font-size:18px;" for="">Already have an account? <a href="login.php" class="text-primary">login</a></span>
            </form>
            
        </div>
    </div>

</body>
</html>
<?php 
session_start();
include 'conn.php';
if(isset($_POST['signup'])){
    $username= $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];
    $query= mysqli_query($conn,"INSERT INTO `users`(`id`, `username`, `email`, `password`, `age`, `created_at`, `role`) VALUES ('','$username','$email','$password','$age','','')");
    if($query>0){
        echo "<script>window.location.href = 'login.php';</script>";
    }
}

?>
    