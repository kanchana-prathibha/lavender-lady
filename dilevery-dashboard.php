<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delivery Dashboard</title>
    <link rel="stylesheet" href="styles/dilevery-dashboard.css">
    <link rel="icon" href="logo/Lavender%20icon-02.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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

<!--Tracking form start-->
<div class="container-fluid" id="back-ground">
    <div class="row justify-content-center">
        <div class="col-md-4" id="card">
            <div class="card">
                <div class="card-header">Delivery Dashboard</div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="orderid">Order Id</label>
                            <input type="text" class="form-control" id="orderid" name="orderid" placeholder="Enter Order Id">
                        </div>
                        <div class="form-group">
                            <label for="deliveryMemberId">Delivery Member Id</label>
                            <input type="text" class="form-control" id="deliveryMemberId" name="deliveryMemberId" placeholder="Enter Delivery Member Id">
                        </div>
                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" class="form-control" id="state" name="state" placeholder="Enter State">
                        </div>
                        <div class="form-group">
                            <label for="locationLink">Location Link</label>
                            <input type="text" class="form-control" id="locationLink" name="locationLink" placeholder="Enter Location Link">
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block" id="update" name="update">Update</button>
                        </div>
                        <hr>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Tracking form end-->



<!--item 1 start-->
<hr>

<div class="container col-md-8" id="manageForm">
    <form>
        <hr>
        <div class="form-row">
            <div class="form-group col-md-2">
                <!--<label>Category</label>-->
                <h6 class="card-no" id="no">01</h6>
            </div>
            <div class="form-group col-md-2">
                <!--<label>Title</label>-->
                <h6 class="card-title" id="title">11</h6>
            </div>
            <div class="form-group col-md-2">
                <!--<label>Size</label>-->
                <h6 class="card-date" id="date">2023-11-28</h6>
            </div>
            <div class="form-group col-md-2">
                <!--<label>Description</label>-->
                <h6 class="card-price" id="price">2000</h6>
            </div>
            <div class="form-group col-md-2">
                <!--<label>Description</label>-->
                <h6 class="card-status" id="status">Processing</h6>
            </div>
            <div class="form-group col-md-2">
                <!--<label>Description</label>-->
                <h6 class="card-address" id="address">51/A</h6>
            </div>
        </div>
    </form>
</div>

<!--item 1 end-->






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/d8fba019aa.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>