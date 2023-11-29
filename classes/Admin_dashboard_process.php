<?php


require_once 'DbConnector.php';

class Admin 
{
  


    private $db;

    public function __construct() {
        $this->db = new DbConnector();
    }

//    public function getUserCount() {
//        $con = $this->db->getConnection();
//        $sql = "SELECT COUNT(*) FROM user WHERE role='customer'";
//        $stmt = $con->prepare($sql);
//        $stmt->execute();
//        $count = $stmt->fetchColumn();
//        return $count;
//    }
         public function getCount($tablename) {
        $con = $this->db->getConnection();
        $sql = "SELECT COUNT(*) FROM $tablename";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $count = $stmt->fetchColumn();
        return $count;
    }
    public function getUsers($tablename) {
        $con = $this->db->getConnection();
        $sql = "SELECT * FROM $tablename ";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function getUser($tablename) {
        $con = $this->db->getConnection();
        $sql = "SELECT * FROM $tablename";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }
   
//    public function deleteUser($id){
//        $con = $this->db->getConnection();
//        $sql = "DELETE  FROM registeredcustomer WHERE customerId=? ";
//        $stmt = $con->prepare($sql);
//        $stmt->bindParam(1, $id);
//        $stmt->execute();
//    }
    }




 