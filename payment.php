<?php


session_start();
if (!isset($_SESSION['user_name'])) {
    header('Location:login.php');
}
$cid = $_SESSION['user_name'];
require 'checkout.php';
require 'classes/DbConnector.php';
$dbuser = new DbConnector();
// when using pay from cart
if (isset($_POST['quan'])) {
    $number = $_POST['quan'];

    $id = $_GET['pay'];
    $cid = $_SESSION['user_name'];

    $con = $dbuser->getConnection();
    $query = "SELECT * FROM cart WHERE cart_id = '$id' ";
    $pstmt = $con->prepare($query);
    $pstmt->execute();
    $rs = $pstmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rs as $rows) {
        //store that values to variables
        $pid = $rows['productId'];
        $name = $_SESSION['user_name'];
        $price = $rows['price'];
        $image = $rows['photo'];
        $productid = $rows['productId'];
        $size = $rows['size'];
        // $total = $number * $price;
    }

    $date = date("Y-m-d");
    $query2 = "INSERT INTO orders (orderDate,price,quantity,productId,customerId,cartId,name,size,photo,deliveryStatus) VALUES ('$date','$price','$number','$pid','$cid','$id','$name','$size','$image','Processing')";
    $pstmt = $con->prepare($query2);
    $pstmt->execute();

    $query3 = "INSERT INTO payment (paymentDate,price,quantity,productId,customerId,cartId,name,size,photo) VALUES ('$date','$price','$number','$pid','$cid','0','$name','$size','$image')";
    $pstmt = $con->prepare($query3);
    $pstmt->execute();
}

// when using direct pay method
if (isset($_POST['pay'])) {
    // require 'classes/DbConnector.php';
    // pid eka thami danna onee
    $pid = $_GET['pay'];
    $cid = $_SESSION['customerId'];
    // $dbuser = new DbConnector();
    $con = $dbuser->getConnection();
    $query = "SELECT * FROM product WHERE product_id = '$pid' ";
    $pstmt = $con->prepare($query);
    $pstmt->execute();
    $rs = $pstmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rs as $rows) {
        //store that values to variables
        $name = $rows['product_name'];
        $price = $rows['price'];
        $image = $rows['photo'];
        $size = $rows['size'];
        $number = 1;
        // $total = $number * $price;
    }


    $date = date("Y-m-d");

    $query2 = "INSERT INTO orders (orderDate,price,quantity,productId,customerId,cartId,name,size,photo,deliveryStatus) VALUES ('$date','$price','$number','$pid','$cid','0','$name','$size','$image','Processing')";
    $pstmt = $con->prepare($query2);
    $pstmt->execute();

    $query3 = "INSERT INTO payment (paymentDate,price,quantity,productId,customerId,cartId,name,size,photo) VALUES ('$date','$price','$number','$pid','$cid','0','$name','$size','$image')";
    $pstmt = $con->prepare($query3);
    $pstmt->execute();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css"> -->
    <link rel="stylesheet" href="css/Navbar-Right-Links-Dark-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <title>Navbar</title>
    <style>
        .navbar {
            font-weight: bold;
        }

        .background_ {
            background-color: #EEEEEE;
        }


        .serch {
            width: 150px;
        }
    </style>

</head>

<body>

    <?php
    $user = new Orders();
    // // require 'classes/DbConnector.php';
    // $cuid = $_SESSION['customerId'];
    // // $dbuser = new DbConnector();
    // $con = $dbuser->getConnection();
    // $query = "SELECT * FROM orders WHERE customerid = '$cuid' ";
    // $pstmt = $con->prepare($query);
    // $pstmt->execute();
    // $rs = $pstmt->fetchAll(PDO::FETCH_ASSOC);
    $rs = $user->getdetails();
    foreach ($rs as $rows_order) {
    //store that values to variables
    $name = $rows_order['name'];
    $price = $rows_order['price'];
    $image = $rows_order['photo'];
    $size = $rows_order['size'];
    $quantity = $rows_order['quantity'];
    $pid = $rows_order['productId'];
    $total = $quantity * $price;
    ?>
    <?php } ?>
    <style>
        .outer{
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }

        .order-details {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #3498db;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #2980b9;
        }
    </style>
    <div class="outer">
        <div class="container">
            <h1>Thank You for Your Order!</h1>
            <p>Your order has been successfully placed.</p>
            <div class="order-details">
                <p>Order ID: <strong>#123456</strong></p>
                <p>Total Amount: <strong>$50.00</strong></p>
            </div>
            <a href="#" class="btn">Track Your Order</a>
        </div>
    </div>

</body>

</html>