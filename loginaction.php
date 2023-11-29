<?php
session_start();
?>
<?php
if (isset($_POST["Login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    require_once "database.php";

    if ($sql = "SELECT * FROM customers WHERE username = '$username'"){
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($user) {
            if (password_verify($password, $user["password"])) {
                $_SESSION["user_name"]=$user["username"];
                $_SESSION["user_id"]=$user["id"];
                header("Location: home.php");
                die();
            }else{
                echo "<div class='alert alert-danger'>Password does not match</div>";
            }
        }else{
            echo "<div class='alert alert-danger'>User Name does not match</div>";
        }
    }
    if ($sql = "SELECT * FROM admin WHERE 	username = '$username'"){
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($user) {
            if (password_verify($password, $user["password"])) {
                $_SESSION["user_name"]=$user["username"];
                $_SESSION["user_id"]=$user["id"];
                header("Location: admin.php");
                die();
            }else{
                echo "<div class='alert alert-danger'>Password does not match</div>";
            }
        }else{
            echo "<div class='alert alert-danger'>User Name does not match</div>";
        }
    }
    if ($sql = "SELECT * FROM delivers WHERE 	username = '$username'") {
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($user) {
            if (password_verify($password, $user["password"])) {
                $_SESSION["user_name"] = $user["username"];
                $_SESSION["user_id"] = $user["id"];
                header("Location: dilevery-dashboard.php");
                die();
            } else {
                echo "<div class='alert alert-danger'>Password does not match</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>User Name does not match</div>";
        }

    }


    /* else{
         $sql = "SELECT * FROM customers WHERE username = '$username'";
         $result = mysqli_query($conn, $sql);
         $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
         if ($user) {
             if (password_verify($password, $user["password"])) {
                 $_SESSION["user_name"]=$user["username"];
                 $_SESSION["user_id"]=$user["id"];
                 header("Location: home.php");
                 die();
             }else{
                 echo "<div class='alert alert-danger'>Password does not match</div>";
             }
         }else{
             echo "<div class='alert alert-danger'>User Name does not match</div>";
         }
     }
     */

}
?>