<!-- INSERT INTO `employee` (`ename`, `euid`, `eroll`, `joindate`, `exprience`, `esalary`, `enumber`, `eemail`, `addres`) 
VALUES ('parth rathi', '1', 'data analyst', '2022-11-23', '2', '120000', '1234567891', 'parth23@gmail.com', ' at post amravati'); -->

<!-- DELETE FROM `employee` WHERE `employee`.`euid` = ' 123' -->

<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
if(!isset($_SESSION["lastname"])){
    header("location: login.html");
}

include_once("connection.php");
$innsert=false;
$delete=false;
if(isset($_POST["submitdata"])){

    if(isset($_POST["submitdata"])){
        $employeename = mysqli_real_escape_string($conn,$_POST['name']);
        $euserid = mysqli_real_escape_string($conn,$_POST['uid']);
        $employeeroll = mysqli_real_escape_string($conn,$_POST['roll']);
        $jdate = mysqli_real_escape_string($conn,$_POST['date']);
        $eexprience = mysqli_real_escape_string($conn,$_POST['expri']);
        $emplsalary = mysqli_real_escape_string($conn,$_POST['salary']);
        $phone = mysqli_real_escape_string($conn,$_POST['pnumber']);
        $emplemail = mysqli_real_escape_string($conn,$_POST['email']);
        $eaddress = mysqli_real_escape_string($conn,$_POST['address']);
        
        $query_add_employee="INSERT INTO `employee` (`ename`, `eroll`, `joindate`, `exprience`, `esalary`, `enumber`, `eemail`, `addres`) 
        VALUES (' $employeename', '$employeeroll', '$jdate', '$eexprience', '$emplsalary ', ' $phone', '$emplemail ', '  $eaddress')"; 
         $save_employee = mysqli_query($conn,$query_add_employee);
         if($save_employee){
            echo "\nadded successfuly";
            header("location: display.php");
           }else{
            echo mysqli_error($conn);
            echo "\n anything else wrong";
            }
    }
    else{
        echo" innsertion not working";
    }

}


if(isset($_POST["remove"])){
    if(isset($_POST["remove"])){
        $remove = mysqli_real_escape_string($conn,$_POST['ruid']);
    
        $query_remove_employee="DELETE FROM `employee` WHERE `employee`.`euid` = ' $remove'";
    
        $remove_employee = mysqli_query($conn,$query_remove_employee);
        if($remove_employee){
           echo "\n remove successfuly";
           header("location: display.php");
          }else{
           echo mysqli_error($conn);
           echo "\n anything else wrong";
           }

    
    }
}


?>