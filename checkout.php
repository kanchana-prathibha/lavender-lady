<?php

class Orders{

    public function getdetails(){
      $cuid = $_SESSION['customerId'];
      $dbuser = new DbConnector();
      $con = $dbuser->getConnection();
      $query = "SELECT * FROM payment WHERE customerid = '$cuid' ";
      $pstmt = $con->prepare($query);
      $pstmt->execute();
      $rs = $pstmt->fetchAll(PDO::FETCH_ASSOC);
      return $rs;
    }
    public function getdetails_order(){
        $cuid = $_SESSION['customerId'];
        $dbuser = new DbConnector();
        $con = $dbuser->getConnection();
        $query = "SELECT * FROM orders WHERE customerid = '$cuid' ";
        $pstmt = $con->prepare($query);
        $pstmt->execute();
        $rs = $pstmt->fetchAll(PDO::FETCH_ASSOC);
        return $rs;
      }

    public function gettotalprice($cid) {
        try{
        $dbuser = new DbConnector();
        $con = $dbuser->getConnection();
        $sql = "SELECT price,quantity FROM payment WHERE customerId=$cid";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $count = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $total = 0;
        foreach($count as $rows){
            $price_qu = $rows['price'] * $rows['quantity'];
            $total = $price_qu + $total;
        }
        return $total;
    }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
    }}

    public function gettotalprice_order($cid) {
        try{
        $dbuser = new DbConnector();
        $con = $dbuser->getConnection();
        $sql = "SELECT price,quantity FROM orders WHERE customerId=$cid";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $count = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $total = 0;
        foreach($count as $rows){
            $price_qu = $rows['price'] * $rows['quantity'];
            $total = $price_qu + $total;
        }
        return $total;
    }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
    }}
}

?>