
<?php
if (isset($_POST["Login"])) {
    $email = $_POST["username"];
    $password = $_POST["password"];
    require_once "database.php";


    if ($email=='officer@gmail.com'&& $password=="admin"){
        header("Location:fuser.php");
        die();
    }

    if ($email=='admin@gmail.com'&& $password=="admin"){
        header("Location:dashborad.php");
        die();
    }

    else{
        $sql = "SELECT * FROM customers WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($user) {
            if (password_verify($password, $user["password"])) {
                $_SESSION["user_name"]=$user["first_name"];
                $_SESSION["user_id"]=$user["id"];
                header("Location: home.php");
                die();
            }else{
                echo "<div class='alert alert-danger'>Password does not match</div>";
            }
        }else{
            echo "<div class='alert alert-danger'>Email does not match</div>";
        }
    }

}
?>

