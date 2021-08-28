<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Welcome to APU Meal System </title>			<!-- Title of the tabs -->
<link href="css/foodview.css" rel="stylesheet" type="text/css" />				<!-- linking the page with this stylesheet css -->
</head>
<body style="background-color:lightblue">
  <div>
    <img src="IMAGES/food.png" width="250" height="200" align="left">
  </div>
  <div id="wordabovenav">
    <h2 style="font-size: 80px;">Welcome To Meal Debit System</h2>
  </div>
<div class="topnav">
  
  <a href="customerprofile.php"target=""><u>Profile</u></a>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="customertransaction.php"target=""><u>Transactions</u></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="default.html"target=""><u>Logout</u></a>
</div>
<!--------------------------------------- seperate parts------------------------------------------------->
<center>
  <h1>Your Information</h1>

  <!--display in html table-->
  <table border="1" style="text-align:center" cellpadding="10px">
    <tr bgcolor= grey>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Balance</th>
      <th>Edit</th>
    </tr>

</center>
</body>
</html>
<?php
    session_start();
    include("conn.php");
    //$query = "SELECT * FROM employees
   // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";

$result = mysqli_query($con, "SELECT * FROM customer
    WHERE customer_id ='".$_SESSION['id']."'");

while ($rows = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<th>".$rows['customer_id']."</th>";
  echo "<td>".$rows['customername']."</td>";
  echo "<td>".$rows['customeremail']."</td>";
  echo "<td>".$rows['customerpass']."</td>";
  echo "<td>".$rows['customeramount']."</td>";

  echo "<td><a href='customerprofileedit.php?customer_id=".$rows['customer_id']."'><button>Edit</button></a></td>";

  echo "</tr>";
}


    ?>
  </table>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>


  <!--------------------------------------- seperate parts------------------------------------------------->
    	<div class="footer"> <!-- start footer -->
    		<p style="text-align:center">
    			<img alt="" src="IMAGES/phone.jpg" width="20" height="20" />CONTACT INFORMATION<br/>
    			<img alt="" src="IMAGES/phone.jpg" width="20" height="20" /> 012-51000939 <br/>
    			<img alt="" src="IMAGES/email.png" width="20" height="20" /> mealdebit@gmail.com
    		</p>
    	</div> <!-- end footer -->

    </body>
    </html>
