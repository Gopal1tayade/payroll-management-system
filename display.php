<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once('connection.php');
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="display.css">
    <title>PayRoll Management</title>
</head>
<body>
    <div class="hedding">Recently Added Employee's</div>
    <div class="container">
        <table>
            <thead>
                <th>Employee Name</th>
                <th>Employee Userid</th>
                <th>Employee Roll</th>
                <th>Employee Joinig Date</th>
                <th>Employee Exprience</th>
                <th>Employee Salary</th>
                <th>Phone Number</th>
                <th>Employee Email</th>
                <th>Employee Address</th>
            </thead>
            <tbody>
            <?php 
                $sql="SELECT * FROM `employee`";
                $result=mysqli_query($conn,$sql);

                while($row=mysqli_fetch_assoc($result)){
                echo "<tr>
                    <td>".$row['ename']. "</td>
                    <td>".$row['euid']. "</td>
                    <td>".$row['eroll']. "</td>
                    <td>".$row['joindate']. "</td>
                    <td>".$row['exprience']. "</td>
                    <td>".$row['esalary']. "</td>
                    <td>".$row['enumber']. "</td>
                    <td>".$row['eemail']. "</td>
                    <td>".$row['addres']. "</td>
                </tr>";
                } 
            ?>
            </tbody>
        </table>
    </div>
    <div class="return" style="padding:20px; font-size:20px; ">
        <a href="index.php"><b>Click to return on Dashboard</b></a>
    </div>
    <section>
        <h3>Remove Added Employee:</h3>
        <form action="add.php" method="post">
          <div class="remove">
            <label>Employee User Id : </label>
            <input type="text" name="ruid" id="ruid" placeholder="Enter Id">
          </div>
          <div class="button">
            <input type="submit" name="remove" id="remove" value="Remove">
          </div>
        </form>
    </section>
</body>
</html>