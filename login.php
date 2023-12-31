
<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="logo/Lavender%20icon-02.png">
    <title>Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/register.css">
  <link rel="stylesheet" href="styles/login.css">
</head>

<body>



<!--nav-bar-start-->
<div class="container-fluid" id="nav-bg">
  <div class="row" id="nav-row">

    <div class="nav" id="nav-main">
      <nav class="navbar navbar-expand-lg navbar-light" id="nav-outer">
        <img src="logo/white%20nav%20logo-01-01.png" alt="" style="height: 80px;width: 200px;margin-right: 0px;margin-right: 60%">
        <!--<a class="navbar-brand" href="#">Your Website</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav" id="nav-items" >
            <li class="nav-item active">
            <li class="nav-item">
              <a style="color:white " class="nav-link" href= "">&nbsp;Home</a>
            </li>
            <li class="nav-item">
              <a style="color:white " class="nav-link" href= "">&nbsp;Category</a>
            </li>
            <li class="nav-item">
              <a style="color:white " class="nav-link" href= "">&nbsp;Cart </a>
            </li>
            <li class="nav-item">
              <a style="color:white " class="nav-link" href= "">Wishlist&nbsp;</a>
            </li>

            <li class="nav-item">
              <a style="color:white " class="nav-link" href= "">&nbsp;Login</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</div>

<!--nav-bar-end-->


<!--Login form start-->
<div class="container-fluid" id="back-ground">
  <div class="row justify-content-center">
    <div class="col-md-5" id="card">
      <div class="card"id="body-card">
        <img src="logo/Lavender%20color%20logo-01.png">
        <div class="card-header">Sign in</div>
        <div class="card-body">

          <form action="loginaction.php" method="post" id="login-from">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
            </div>
            <div class="col-md-12">
              <button type="submit" value="Login" name="Login" class="btn btn-primary btn-block" id="loginbtn">Login</button>

            </div>
            <div class="form-group" id="or">
              <label>OR</label>
            </div>
            <div class="col-md-12">
            <a href="#" class="btn btn-primary btn-block" id="fb">
              <i class="fa-brands fa-facebook fa-beat-fade fa-lg" style="color: #ffffff;"></i> Continue with Facebook
            </a>
            </div>
            <div class="form-group" id="signup">
              <label>Are you new user?</label>
              <a href="register.php">Register here</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!--login form end-->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/d8fba019aa.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>