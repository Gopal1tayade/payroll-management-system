<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once("connection.php");

if(isset($_POST["submitData"])){
        $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
        $midalname = mysqli_real_escape_string($conn,$_POST['midalname']);
        $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
        $contact_number = mysqli_real_escape_string($conn,$_POST['number']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $username = mysqli_real_escape_string($conn,$_POST['uname']);
        $password = mysqli_real_escape_string($conn,$_POST['pass']);
        $c_password = mysqli_real_escape_string($conn,$_POST['cpass']);
        $gender = mysqli_real_escape_string($conn,$_POST['gender']);

        $query_add_user = "INSERT INTO `registration` (`Username`, `Fname`, `Mname`, `Lname`, `phone`, `Email`, `Password`)
         VALUES ('$username', '$firstname', '$midalname', '$lastname', '$contact_number', '$email', '$password')";

         $save_user = mysqli_query($conn,$query_add_user);
         if($save_user){
                echo "\nadded";
         }else{
                echo mysqli_error($conn);
                echo "\nnot added";
         }
}else{
        echo "not working";
}

?>