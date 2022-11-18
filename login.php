<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once("connection.php");

if(isset($_POST["loginBtn"])){
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['passw']);

    $query_find_user = "select * from registration where Username='$username' and Password='$password'";
    $find_user = mysqli_query($conn,$query_find_user);
    $user = mysqli_fetch_assoc($find_user);
    $row = mysqli_num_rows($find_user);

    if ($row > 0) {
        echo 'working';
        echo $user["Email"];
        session_start();
        $_SESSION["firstname"] = $user["Fname"];
        $_SESSION["lastname"] = $user["Lname"];
        header("location: index.php");
    }else{
        echo "not found";
    }   
}else{
    echo 'error';
}

?>