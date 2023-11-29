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

    <link rel="stylesheet" href="styles/main.css">

</head>
<body>
<div class="snowflakes">

</div>
<script src="js/xmas.js"></script>
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
<!--search bar-->
<div class="container-fluid"id="search-nav">
    <nav class="container" >
        <form class="">
            <br>
            <input class="form-control mr-sm-2 bar" type="search" placeholder="Search" aria-label="Search">
            <br>
            <button class="btn btn-outline-dark my-2 my-sm-0 serch" type="submit">Search Items</button>
        </form>
    </nav>
    <!--search bar end-->
</div>


<div id="link-to-category">
    <section class="py-4 py-xl-5">
        <div class="container">
            <div style="background-color: #c7ecee" class="border rounded border-0 border-dark overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="text-dark p-4 p-md-5">
                            <h2 class="fw-bold text-dark mb-3"><strong>Men's Collection</strong></h2>
                            <p class="mb-4">We provide  best quality products for you</p>
                            <div class="my-3"><a class="btn  btn-lg me-2" role="button" href="men.php" style="background:#74b9ff;color: #B43471 ;font-weight: bold">Goto Collection</a></div>
                        </div>
                    </div>
                    <div class="col-md-6 order-first order-md-last" style="min-height: 250px;"><img class="w-100 h-100 fit-cover" src="logo/Mens_Fashion-Bug-Sri-Lanka_Clothing-Store_King-Of-Fashion.jpg"></div>
                </div>
            </div>
        </div>
    </section>
</div>

<div id="link-to-cd">
    <section class="py-4 py-xl-5">
        <div class="container">
            <div style="background-color: #ff9ff3" class=" border rounded border-0 border-dark overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6"><img class="w-100 h-100 fit-cover" src="logo/Unisex_Fashion-Bug-Sri-Lanka_Clothing-Store_King-Of-Fashion.jpg"></div>
                    <div class="col-md-6 order-first order-md-last" style="min-height: 250px;">
                        <div class="text-dark p-4 p-md-5">
                            <h2 class="fw-bold text-dark mb-3"><strong>Women's Collections</strong></h2>
                            <p class="mb-4">We provide best quality products for you</p>
                            <div class="my-3" ><a class="btn btn-lg me-2" role="button" href="women.php" id="goCollection" style="background:#D980FA;color: #B43471;font-weight: bold"><span >Goto Collection</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<br><br>
</div>
<div class="container-fluid">
    <div class="row" id="satin-saree">
        <img src="test-photos/Home_Page_Saree_Banner_Fashion-Bug-Sri-Lanka.jpg" alt="Your Image" class="img-fluid">
    </div>

</div>
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
<hr class="custom-hr">
<!--footer start-->
<!-- fotter -->
<hr>
<div class="container-fluid back">
    <div class="row">

        <div class="col-md-3">
            <h6>Contact us</h6>
            <a href="#" ><i class="fa-brands fa-facebook fa-lg" style="color: #0561ff;"></i></a>&ensp;&ensp;
            <a href="#"><i class="fa-brands fa-twitter fa-lg" style="color: #32aefb;"></i></a>&ensp;&ensp;
            <a href="#"><i class="fa-brands fa-instagram fa-lg" style="color: #f15704;"></i></a>&ensp;&ensp;
            <a href="#"><i class="fa-brands fa-google fa-lg" style="color: #008020;"></i></a>&ensp;&ensp;
            <a href="#" class="fa fa-linkedin"></a><br><br>
            <a>If you have any questions, feel free to<a href="mailto:kanchanaprathibha2@gmail.com"><br>contact me via email</a>.</a>
            <a href="#" class="d-flex" style="Text-decoration:none;"><span class="material-symbols-outlined"></span>&ensp;0773465426</a>

        </div>
        <div class="col-md-3">
            <h6>
                Services
            </h6>
            <ul>
                <a href="" style="text-decoration:none; color:black"><li>Customize products</li></a>
                <a href="" style="text-decoration:none; color:black"><li>Order Clothes</li></a>
                <a href="" style="text-decoration:none; color:black"><li>Delivery</li></a>
                <a href="" style="text-decoration:none; color:black"><li>Sign-up</li></a>
                <a href="" style="text-decoration:none; color:black"><li>Help</li></a>
            </ul>
        </div>
        <div class="col-md-3">
            <h6>
                We Accept
            </h6>
            <ul>
                <img class="img-fluid" src="https://nisus.lk/web/image/320032/payhere_square_banner.png" alt="">
            </ul>
        </div>
    </div>
</div>
<hr class="custom-hr">
<div class="container-fluid back">
    <div class="row">
        <div class="col-12 col-md-6">
            <h6>This site is protected by Google Privacy Policy and Terms of Service apply.</h6>
        </div>
        <div class="col-md-6">
            <h6 class="text-center">&copy;2023 LAVENDER Technologies</h6>
        </div>
    </div>
</div>
<hr><hr>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/d8fba019aa.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>



</body>
</html>
