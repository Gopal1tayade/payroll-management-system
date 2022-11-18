 <?php 
 ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once("connection.php");

if(isset($_POST["loansubmit"])){
  
  $leuid=mysqli_real_escape_string($conn,$_POST['eid']);
  $lemname=mysqli_real_escape_string($conn,$_POST['lename']);
  $loanamount=mysqli_real_escape_string($conn,$_POST['lamount']);
  $date=mysqli_real_escape_string($conn,$_POST['ldate']);
  $i_trest=mysqli_real_escape_string($conn,$_POST['intrest']);

  
  $query_add_loan="INSERT INTO `loan` (`leuid`, `ename`, `loan_amount`, `issue_date`, `intrest`)
   VALUES ('$leuid', '$lemname', ' $loanamount', '$date', ' $i_trest')";
  $save_employee_loan = mysqli_query($conn,$query_add_loan);
  if($save_employee_loan){
    echo "<script>alert('loan granted successfully!');</script>";
   }else{
    echo mysqli_error($conn);
    echo "<script>alert('Something went wrong.\n Please try again!);</script>";
    }

}
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="loan.css">
    <title>PayRoll Management</title>
  </head>
  <body>
    <marquee behavior="alternate" direction="left" loop=""><h2>Loan <span>Detail's</span></h2></marquee>
    
    <section>
      <div class="loan">
        <div>
        <form action="#" method="post">
          <div class="detail">
            <label>Employee ID :</label>
          </div>
          <div class="take">
            <input type="text" name="eid" placeholder="Enter">
          </div>
          <div class="detail">
            <label>Employee Name :</label>
          </div>
          <div class="take">
            <input type="text" name="lename" placeholder="Enter">
          </div>
          <div class="detail">
            <label>Laon Amount :</label>
          </div>
          <div class="take">
            <input type="text" name="lamount" placeholder="Enter">
          </div>
          <div class="detail">
            <label>Date:</label>
          </div>
          <div class="take">
            <input type="date" name="ldate" placeholder="Enter">
          </div>
          <div class="detail">
            <label>Intrest Rate :</label>
          </div>
          <div class="take">
            <input type="text" name="intrest" placeholder="Enter">
          </div>
          <div class="submit">
            <input type="submit" name="loansubmit" value="ADD">
          </div>
        </form>
      </div>
      </div>
    </section>
    <section>
        <div class="table">
            <table>
                <thead>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Loan Amount</th>
                </thead>
                <tbody>
                    <?php 
                $sql="SELECT * FROM `loan`";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($result))
                {
                   echo"<tr>
                    <td scope='row'>".$row['leuid']. "</td>
                    <td>".$row['ename']. "</td>
                    <td>".$row['loan_amount']. "</td>
                  </tr>";
                   } ?>
                    </tbody>
            </table>
        </div>
    </section>
  </body>
</html>
