<?php
require "./classes/DbConnector.php";
class   Product{

    private $name;
    private $price;
    private $discription;
    private $size;
    private $category;
    private $img;

    public function __construct($name,$price,$discription,$size,$category,$img)
    {
        $this->name=$name;
        $this->price = $price;
        $this->discription= $discription;
        $this->size = $size;
        $this->category = $category;
        $this->img = $img;
    }

    public function addproduct($name,$price,$discription,$size,$category,$img){
        $dbcon = new DbConnector();
        $con = $dbcon->getConnection();
        $query = "INSERT INTO product(category,product_name,price,photo,size,discription) VALUES('$category','$name','$price','$img','$size','$discription')";
        $pstmt = $con->prepare($query);
        $pstmt->execute();

        if($pstmt->rowCount() > 0 ){
            return true;
        }else{
            return false;
        }

        return $this->name;
        return $this->price;
        return $this->discription;
        return $this->size;
        return $this->category;
        return $this->img;
    }

}


        // $insert = "INSERT INTO product(category,product_name,price,photo,size,discription) VALUES('$size','$name','$price','$image','$selectd_value3','$discription')";
        // $upload = mysqli_query($conn,$insert);
        // if($upload){
        //     move_uploaded_file($image_tmp_name, $image_folder);
        //     header('Location:../Admin.php?done=1');
        // }else{
        //     header('Location:../Admin.php?done=2');
        // } 
?>