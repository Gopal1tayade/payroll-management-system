<?php
$servername="localhost";
$username="root";
$password="";
$dbname="pay_roll_management";
$conn= mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("Connection Failed");
}
else{
    // echo "connection successful:";
}



?>