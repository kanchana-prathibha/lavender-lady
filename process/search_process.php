<?php
// require "./classes/DbConnector.php";
include "../classes/DbConnector.php";


if(isset($_POST['submit'])){
    $ae_item = $_POST['search'];
    if(empty($_POST['search'])){
        header("Location:../home.php?staus=0");
    }else{
        $dbcon = new DbConnector();
        $con = $dbcon->getConnection();
        $query = "SELECT * FROM product WHERE product_name LIKE '$ae_item%' ";
        $pstmt = $con->prepare($query);
        $pstmt->execute();
        $rs = $pstmt->fetch(PDO::FETCH_ASSOC);
        foreach($rs as $rows){
            $ts =  $rs['product_name'];
            $bs =  $rs['price'];
            echo $ts;
            echo $bs;

        }
        
    }
}

?>