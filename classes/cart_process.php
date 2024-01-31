<?php

class cart {

    private $db;

    public function __construct() {
        $this->db = new DbConnector();
    }

    //remove data from the wishlist/database
    public function removeforcart($cartId) {

        $dbcon = new DbConnector();
        $con = $dbcon->getConnection();
        $query = "DELETE FROM cart WHERE `cart_id` = :cart_id";

        $pstmt = $con->prepare($query);
        $pstmt->bindParam(':cart_id', $cartId, PDO::PARAM_INT);
        $pstmt->execute();

        //header('Location:wishlist.php');

    }


    //Display the items in the database
    public function getItems($cusid) {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();
            $query = "SELECT * FROM product,cart WHERE product.product_id = cart.product_id AND customer_name = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindParam(1, $cusid);
            $pstmt->execute();
            $rs = $pstmt->fetchAll(PDO::FETCH_ASSOC);
            return $rs;

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();

        }

    }

    // take data from clothing collection page and //store that values again to database query2
    public function getProductDetails($cartId, $cusid) {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();
            $query = "SELECT * FROM product WHERE product_id = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindParam(1, $cartId, PDO::PARAM_INT);
            $pstmt->execute();
            $rs = $pstmt->fetchAll(PDO::FETCH_ASSOC);

            if (!empty($rs)) {
                $row = $rs[0];
                $pid = $row['product_id'];
                $name = $row['product_name'];
                $price = $row['price'];
                $photo = $row['photo'];

                $description = $row['discription'];

                //store that values again to database
                $query2 = "INSERT INTO cart(customer_name, product_id) VALUES (?, ?)";
                $pstmt2 = $con->prepare($query2);
                $pstmt2->bindParam(1, $_SESSION["user_name"], PDO::PARAM_STR);

                echo $_SESSION["user_name"];
                $pstmt2->bindParam(2, $pid, PDO::PARAM_INT);
                //$pstmt2->bindParam(3, $name);
                //$pstmt2->bindParam(4, $price);
                //$pstmt2->bindParam(5, $photo);
                //$pstmt2->bindParam(6, $size);
                //$pstmt2->bindParam(6, $description);

                $a = $pstmt2->execute();
            }

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    }


}
