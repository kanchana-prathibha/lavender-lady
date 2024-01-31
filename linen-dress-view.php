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
    <title>Lavender Lady</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/item-view.css">


</head>
<body>

<!--nav-bar-start-->
<div class="container-fluid" id="nav-bg">
    <div class="row" id="nav-row">
        <div class="nav" id="nav-main" >
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
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php
                                        echo$_SESSION["user_name"];
                                        ?></a>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="logout.php">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>

</div>
<!--nav-bar-end-->

<?php
@include 'database.php';
$select = mysqli_query($conn, "SELECT * FROM product WHERE category = 'Women LINEN DRESS'");
?>
<!--Item start-->
<?php while ($row = mysqli_fetch_assoc($select)) { ?>
    <div class="container">
        <div class="card mb-3" id="cardview">
            <div class="row g-0">

                <div class="col-md-4" id="image">
                    <img src="img/<?php echo $row['photo']; ?>" height="100" alt="picture 1" style="height:250px;" class="mx-auto d-block img-fluid">
                </div>

                <div class="col-md-12 col-lg-4 col-sm-1">
                    <div class="card-body">
                        <h5 class="text-center"><?php echo $row['product_name'] ?></h5>
                        <h7 class="card-text" id="discription"><?php echo $row['discription'] ?></h7>
                        <p class="card-text" id="price">Rs.<?php echo $row['price'] ?>.00</p>

                    </div>


                    <div class="container">
                        <div class="row">
                            <div class="col-md-24">
                                <form action="cart.php?cart=<?php echo $row['product_id']; ?>" method="post">
                                    <div class="form-group d-flex justify-content-between" >
                                        <div class="form-check" >
                                            <input class="form-check-input" type="radio" name="options" id="option1" value="option1">
                                            <label class="form-check-label" for="option1">S</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="options" id="option2" value="option2">
                                            <label class="form-check-label" for="option2">M</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="options" id="option3" value="option3">
                                            <label class="form-check-label" for="option3">L</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="options" id="option4" value="option4">
                                            <label class="form-check-label" for="option4">XL</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="options" id="option5" value="option5">
                                            <label class="form-check-label" for="option5">XXL</label>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <form action="wishlist.php?wishlist=<?php echo $row['product_id']; ?>" method="post">
                        <button class="btn btn-outline-warning" title="Add to wishlist"><i class="fa fa-heart-o"></i></button><br><br>
                    </form>
                    <div class="card-body " id="btn">
                        <a href="wishlist.php"><button type="button" id="cart" class="btn btn-primary"  ><i class="fa-solid fa-heart fa-beat"></i></button></a>
                        <form action="cart.php?cart=<?php echo $row['product_id']; ?>" method="post">
                            <button class="btn btn-outline-warning" title="Add to wishlist">add to cart</button><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>

<!--Item end-->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6551c835cec6a912820f362f/1hf3nc4ug';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/d8fba019aa.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


</body>
</html>