<?php
session_start();  
if (!isset($_SESSION["firstname"])) {
    header("location: login.html");
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet"
    />
    <title>Payroll Management</title>
  </head>
  <body>
    <div class="container">
      <aside>
        <div class="top">
          <div class="logo">
            <img src="pay.png" />
            <h2>PAY<span class="danger">ROLL</span></h2>
          </div>
          <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
          </div>
        </div>
        <div class="sidebar">
          <a href="#">
            <span class="material-icons-sharp">grid_view</span>
            <h3>Dashbord</h3>
          </a>
          <a href="employee.php" class="active">
            <span class="material-icons-sharp">people</span>
            <h3>Employee's</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp">mail_outline</span>
            <h3>Massages</h3>
            <span class="message-count">23</span>
          </a>
          <a href="#">
            <span class="material-icons-sharp">insights</span>
            <h3>Loan Analytics</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp">inventory</span>
            <h3>Product</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp">report_gmailerrorred</span>
            <h3>Report</h3>
          </a>
          <a href="add.html" target="_self">
            <span class="material-icons-sharp">add</span>
            <h3>Add Empolyee's</h3>
          </a>
          <a href="display.php">
            <span class="material-icons-sharp">remove</span>
            <h3>Remove Employee</h3>
          </a>
          <a href="display.php">
            <span class="material-icons-sharp">add</span>
            <h3>Add Product</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp">settings</span>
            <h3>Setting</h3>
          </a>
          <a href="logout.php">
            <span class="material-icons-sharp">logout</span>
            <h3>Logout</h3>
          </a>
        </div>
      </aside>
      <!-----------------------------------END OF  ASIDE-------------------------->

      <main>
        <h1>Dashbord</h1>
        <div class="date">
          <input type="date" name="date" id="date" />
        </div>
        
        <div class="insights"> 
          <div class="sales" >
            <a id="click" href="loan.php"> 
            <span class="material-icons-sharp">account_balance</span>
            <div class="middle">
              <div class="left">
                <h3>Total Loan</h3>
                <h1>$1,23,345</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="number">
                  <p>81%</p>
                </div>
              </div>
            </div>
            <small class="text-muted">last 1 year</small>
          </div></a>
          <!-- End of slaes  -->

          <div class="expenses">
            <span class="material-icons-sharp">bar_chart</span>
            <div class="middle">
              <div class="left">
                <h3>Total Expenses</h3>
                <h1>$23,345</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="number">
                  <p>61%</p>
                </div>
              </div>
            </div>
            <small class="text-muted">last 1 year</small>
          </div>
          <!-- End of Expenses  -->

          <div class="income">
            <span class="material-icons-sharp">money</span>
            <div class="middle">
              <div class="left">
                <h3>Total Income</h3>
                <h1>$2,22,345</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="number">
                  <p>55%</p>
                </div>
              </div>
            </div>
            <small class="text-muted">last 1 year</small>
          </div>
          <!-- End of Income -->
        </div>
        <!-- ------------END OF INSIGHTS---------- -->
        <div class="recent-orders">
          <h2>Recent Products</h2>
          <table>
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Product Number</th>
                <th>Payment</th>
                <th>Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mini Drone</td>
                <td>85493</td>
                <td>Due</td>
                <td class="warning">Pendding</td>
                <td class="primary">Details</td>
              </tr>
              <tr>
                <td>Mini Drone</td>
                <td>85493</td>
                <td>Due</td>
                <td class="warning">Pendding</td>
                <td class="primary">Details</td>
              </tr>
              <tr>
                <td>Mini Drone</td>
                <td>85493</td>
                <td>Due</td>
                <td class="warning">Pendding</td>
                <td class="primary">Details</td>
              </tr>
              <tr>
                <td>Mini Drone</td>
                <td>85493</td>
                <td>Due</td>
                <td class="warning">Pendding</td>
                <td class="primary">Details</td>
              </tr>
              <tr>
                <td>Mini Drone</td>
                <td>85493</td>
                <td>Due</td>
                <td class="warning">Pendding</td>
                <td class="primary">Details</td>
              </tr>
            </tbody>
          </table>
          <a href="#">Show All</a>
        </div>
      </main>
      <!-- ---------------END OF MAIN---------- -->
      <div class="right">
        <div class="top">
          <button id="menu-btn">
            <span class="material-icons-sharp">menu</span>
          </button>
          <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
          </div>
          <div class="profile">
            <div class="info">
              <p>Hey,<b><?php echo $_SESSION["firstname"]." ".$_SESSION["lastname"]; ?></b></p>
              <small class="text-muted">Admin</small>
            </div>
            <div class="profile-photo">
              <img src="profile.png" />
            </div>
          </div>
        </div>
        <!-- ------END OF TOP---- -->
        <div class="recent-updates">
          <h2>Recent Updates</h2>
          <div class="updates">
            <div class="update">
              <div class="profile-photo">
                <img src="profile.png" />
              </div>
              <div class="message">
                <p><b>Parth Rathi , </b>Data Analyst of the Ekart</p>
                <small class="text-muted">From Recent Updates</small>
              </div>
            </div>
            <div class="update">
              <div class="profile-photo">
                <img src="profile.png" />
              </div>
              <div class="message">
                <p><b>Srujan Sane , </b>Senior Security Advisor of the Ekart</p>
                <small class="text-muted">From Recent Updates</small>
              </div>
            </div>
            <div class="update">
              <div class="profile-photo">
                <img src="profile.png" />
              </div>
              <div class="message">
                <p><b>Gopal Tayade , </b>Senior Manager of the Ekart</p>
                <small class="text-muted">From Recent Updates</small>
              </div>
            </div>
          </div>
        </div>
        <!-- -------------END OF RECENT UPDATES--------- -->
        <div class="sales-analytics">
          <h2>Sales Analytics</h2>
          <div class="item online">
            <div class="icon">
              <span class="material-icons-sharp">shopping_cart</span>
            </div>
            <div class="right">
              <div class="info">
                <h3>ONLINE ORDERS</h3>
                <small class="text-muted">Last 24 Hours</small>
              </div>
              <h5 class="success">+39%</h5>
              <h3>3849</h3>
            </div>
          </div>
          <div class="item offline">
            <div class="icon">
              <span class="material-icons-sharp">local_mall</span>
            </div>
            <div class="right">
              <div class="info">
                <h3>OFFLINE ORDERS</h3>
                <small class="text-muted">Last 24 Hours</small>
              </div>
              <h5 class="danger">-17%</h5>
              <h3>1100</h3>
            </div>
          </div>
          <div class="item customers">
            <div class="icon">
              <span class="material-icons-sharp">person</span>
            </div>
            <div class="right">
              <div class="info">
                <h3>NEW CUSTOMERS</h3>
                <small class="text-muted">Last 24 Hours</small>
              </div>
              <h5 class="success">+25%</h5>
              <h3>849</h3>
            </div>
          </div>
          <div class="item add-product">
            <div>
              <span class="material-icons-sharp">add</span>
              <h3>Add Product</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="index.js"></script>
  </body>
</html>

<span class="material-icons-sharp">bar_chart</span>
