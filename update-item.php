<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-GLhlTQ8iK4t5+q/EjUn9G6Piq4y4C26q5/D6HcES5P2iUqZIeNi0ecfXp1UwJowg" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="logo/Lavender%20icon-02.png">
    <title>update-item</title>
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/update-item.css">
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

<!--update-item 1- start-->
<div class="container mt-5">
    <h2>Update Item  <i class="fa-solid fa-heart fa-beat" style="color: #ba1375;"></i> </h2>
    <hr>


    <form>
        <div class="form-row">
            <div class="form-group col-md-2">
                <img src="https://fbpros3v1.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2023/11/0310104168BIG-2ladies-dress_fashion-bug-srilanak_compressed.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="form-group col-md-2">
                <label>Category</label>
                <input type="text" class="form-control" id="category" value="Women">
            </div>
            <div class="form-group col-md-2">
                <label>Title</label>
                <input type="text" class="form-control" id="title" value="AMANI SLEEVLESS FRILL HEM MINI DRESS">
                <label>Price</label>
                <input type="text" class="form-control" id="price" value="Rs.2600.00">
            </div>
            <div class="form-group col-md-1">
                <label>Size</label>
                <input type="text" class="form-control" id="size" value="Size: Small">
            </div>
            <div class="form-group col-md-3">
                <label>Description</label>
                <textarea class="form-control" id="description">Frill hem detailed sleeveless casual dress with round neckline.</textarea>
            </div>
            <div class="form-group col-md-2">
                <button type="submit" class="btn btn-primary col-md-8" id="updatebtn">Update</button>
                <hr>
            </div>
        </div>
    </form>
</div>

<!--update-item  1- end-->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/d8fba019aa.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>