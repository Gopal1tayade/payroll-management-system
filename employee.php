<?php

include_once "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" cotent="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div style="padding: 100px;">
    <center><h1 class="pb-4">Employee List</h1></center>
<table  class="table table-success table-stripped">
  <thead>
    <tr>
                <th>Employee Name</th>
                <th>Employee Userid</th>
                <th>Employee Roll</th>
                <th>Employee Joinig Date</th>
                <th>Employee Exprience</th>
                <th>Employee Salary</th>
                <th>Phone Number</th>
                <th>Employee Email</th>
                <th>Employee Address</th>
    </tr>
  </thead>
  <tbody>
  <?php 

                $sql="SELECT * FROM `employee`";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($result))
                {
                   echo"<tr>
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
                   } ?>

  </tbody>
</table>  
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js
"></script>
</body>
</html>