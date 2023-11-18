<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="logo/Lavender%20icon-02.png">

    <title>Register</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="styles/register.css">
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

<!--register form start-->
<div class="container-fluid" id="back-ground">
    <div class="row justify-content-center">
        <div class="col-md-5" id="card">
            <div class="card">
                <img src="logo/Lavender%20color%20logo-01.png">
                <div class="card-header">Sign up</div>
                <?php
                if (isset($_POST["submit"])) {
                    $UserName = $_POST["username"];
                    $email = $_POST["email"];
                    $mobile = $_POST["mobile"];
                    $sex =0;
                    $gender =$_POST["gender"];
                    $password = $_POST["password"];
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $errors = array();
                    if($gender==1){
                       $sex="Male";
                    }
                    if($gender==2){
                        $sex="Female";
                    }
                    if (empty($UserName) OR empty($email) OR empty($password) OR empty($mobile)) {
                        array_push($errors,"All fields are required");
                    }
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        array_push($errors, "Email is not valid");
                    }
                    if (strlen($password)<4) {
                        array_push($errors,"Password is too short");
                    }

                    require_once "database.php";
                    $sql = "SELECT * FROM customers WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    $rowCount = mysqli_num_rows($result);
                    if ($rowCount>0) {
                        array_push($errors,"Email already exists!");
                    }
                    if (count($errors)>0) {
                        foreach ($errors as  $error) {
                            echo "<div class='alert alert-danger'>$error</div>";
                        }
                    }else{
                        $sql = "INSERT INTO customers (username,email,mobile, password,sex) VALUES ( ?, ?, ?,?,? )";
                        $stmt = mysqli_stmt_init($conn);
                        $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                        if ($prepareStmt) {
                            mysqli_stmt_bind_param($stmt,"sssss",$UserName, $email, $mobile, $passwordHash,$sex);
                            mysqli_stmt_execute($stmt);
                            echo "<div class='alert alert-success'>You are registered successfully.</div>";
                        }else{
                            die("Something went wrong");
                        }
                    }
                }
                ?>
                <div class="card-body">
                    <form action="register.php" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter your Mobile number">
                        </div>
                        <div class="form-group">
                            <label for="male" class="col-form-label">Select Gender:</label>
                            <div class="row">
                                <div class="col">
                                    <div class="custom-control custom-radio" style="font-weight: normal">
                                        <input type="radio" id="male" name="gender" value="1" class="custom-control-input">
                                        <label class="custom-control-label" for="male">Male</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="custom-control custom-radio" style="font-weight: normal">
                                        <input type="radio" id="female" name="gender" value="2" class="custom-control-input">
                                        <label class="custom-control-label" for="female">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block" id="Register" name="submit">Sign Up</button>
                        </div>
                        <div class="form-group" id="or">
                            <label>OR</label>
                        </div>
                        <div class="col-md-12">
                            <a href="#" class="btn btn-primary btn-block" id="fb">
                                <i class="fa-brands fa-facebook fa-beat-fade fa-lg" style="color: #ffffff;"></i> Continue with Facebook
                            </a>
                        </div>
                        <div class="form-group" id="signin">
                            <label>Are you already registerd ?</label>

                            <a href="login.php">Login here</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--register form end-->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/d8fba019aa.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>