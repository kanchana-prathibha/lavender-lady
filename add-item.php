<?Php
// require 'process/add_product_process.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://www.youtube.com/redirect?event=video_description&redir_token=QUFFLUhqbjFIV3BGRTc4V1FVYTQwVk5GNnFDbGRPaExFZ3xBQ3Jtc0ttUGpHSXpLbmFzWGozZE1OczJBTnZXSHVZQ2tqVkZkelZ3YlkxSFR4NjItTjk1VjVwMVg3M1FMRUhuOEJiRmsxTnp3SXo0dlZCdmx1WXJSWUE2X3pSMHE0R2h5NU13Mm5NcDdKVWluWGtIUHA4VFc4UQ&q=https%3A%2F%2Fcdnjs.com%2Flibraries%2Ffont-awesome&v=UQpZJdQ2o-I">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!--    <script src="admin.js"></script>-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <style>

        /* .btn{

        } */
    </style>
</head>
<body>
<!--<nav class="navbar navbar-light navbar-expand-lg" style="background-color:#87CBB9">
    &ensp;
    <img src="src_images/logo new.png" style="width:50px; height:50px;"> &ensp;
    <h4 class="navbar-brand">Hello Admin! </h4>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#nav_tings"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse " id="nav_tings">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="admin_dashboard.php" class="nav-link">Admin_Dashboard</a></li>

        </ul>
    </div>
</nav>-->


<?php

if(isset($_POST['add_product'])){
    @include 'database.php';

    $category = $_POST['category'] ;
    $name = $_POST['title'];
    $price = $_POST['product_price'];
    $img = $_FILES['product_image']['name'];
    $image_tmp_name = $_FILES['product_image']['tmp_name'];
    $image_folder ='img/'.$img ;
    $size = $_POST['size'];
    $discription = $_POST['discription'];

    if(empty($category) || empty($size) || empty($name) || empty($price) || empty($img) || empty($discription)){

        $message_null = '<h3 style="color:red;" class="text-center">please fill out all</h3>';
        echo $message_null;
    }else{

        @include 'process/add_product_process.php';
        $addproduct =  new product($name,$price, $discription, $size, $category, $img);
        $result = $addproduct->addproduct($name,$price, $discription, $size, $category, $img);

        if($result == 1){

            move_uploaded_file($image_tmp_name, $image_folder);
            $message_done = '<h3 style="color:green;" class="text-center">Product Added Sucessfully</h3>';
            echo $message_done;
        }else{

            $message_no = '<h3 style="color:red;" class="text-center">Did Not Added</h3>';
            echo $message_no;
        }

    }
}

if (isset($_GET['delete'])){
    @include 'classes/DbConnector.php';
    $id = $_GET['delete'];
    $dbcon = new DbConnector();
    $con = $dbcon->getConnection();
    $query = "DELETE FROM product WHERE product_id = '$id'";
    $pstmt = $con->prepare($query);
    $pstmt->execute();
    if($pstmt->rowCount() >0 ){
        echo '<h3 style="color:orange;" class="text-center"> !!!! Product Deleted Sucessfully !!!!</h3>';


    }else{
        echo '<h3 style="color:red;" class="text-center"> !-!-!-! Product Delete Fialed !-!-!-!</h3>';
        header('Location:Admin.php');

    }

}
?>

<div class="container">
    <div class="admin-product-form-container">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <!-- <form> -->
            <h3>add a new product</h3>
            <select class="box" name="category">
                <option>Select the category</option>
                <option value="Men Trousers">Men Trousers</option>
                <option value="T_Shirts">T_Shirts</option>
                <option value="Men Shorts">Men Shorts</option>
                <option value="SPORT KITS">SPORT KITS</option>
                <option value="FORMAL SHIRT">FORMAL SHIRT</option>
            </select>

            <input type="text" placeholder="Enter Product Name" name="title" class="box">
            <!-- product name means mens chino pant-brown.mens chino pant-red like wiseeee-->
            <input type="number" placeholder="Enter Product Price" name="product_price" class="box">
            <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
            <select class="box" name="size">
                <option>Select the Product Size</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
            </select>
            <input type="text" placeholder="Enter Product Discription" name="discription" class="box">
            <input type="submit" class="btn" name="add_product" value="add product">
        </form>
    </div>
</div>

<!-- by using database selecting the things we enterd by adding products -->
<?php
@include 'database.php';
$select = mysqli_query($conn,"SELECT * FROM product");
?>
<!-- throw the database connection selecting the data and store them in to a variable -->
<div class="container">
    <?php while($row = mysqli_fetch_assoc($select)){?>
        <!--opening { bracket-->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <img src="img/<?php echo $row['photo'];?>" height="350px" alt="">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <h3>Category : <?php echo $row['category'];?></h3>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <h3>Name : <?php echo $row['product_name'];?></h3>
                <br>
                <h3>Price : <?php echo $row['price'];?></h3>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <h3>Size : <?php echo $row['size'];?></h3>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2">
                <h3>Note : <?php echo $row['discription'];?></h3>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2">
                <a href="update.php?edit=<?php echo $row['product_id']; ?>" class="btn" name="update_product" style="width: 120px"> update </a>
                <a href="?delete=<?php echo $row['product_id']; ?>" class="btn_remove" style="width: 120px"> delete </a>

            </div>
        </div>
    <?php } ?>
    <!--closing that opend } bracket-->
</div>
</body>
</html>


