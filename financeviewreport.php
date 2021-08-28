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
    <a href="financeviewtransaction.php"target=""><u>View Transactions</u></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="financeviewreport.php"target=""><u>View Reports</u></a>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="financetopup.php"target=""><u>TopUp</u></a>
    <a href="financerefund.php"target=""><u>Refund</u></a>
    <a href="default.html"target=""><u>Logout</u></a>
  </div>
<!--------------------------------------- seperate parts------------------------------------------------->

<form action="" method="post">
  <div class="head">
    <h1>Search Stall ID</h1>
  </div>
  <center>
<input type="text" class="noob" size="20px" name="id" value="">
<table class="table1" border="1" style="text-align:center" cellpadding="10px">
  <tr bgcolor= lightblue>
    <th>Stall ID</th>&nbsp;&nbsp;
    <th>Stall Name</th>&nbsp;&nbsp;
  </tr>

</body>
</html>
<?php

  include("conn.php");
  //$query = "SELECT * FROM employees
 // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";

$result = mysqli_query($con, "SELECT * FROM stall");

while ($rows = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td >".$rows['stall_id']."</td>";
echo "<td >".$rows['stallname']."</td>";
echo "</tr>";
}
  ?>
</table>
<div class="head">
  <h1>Date (yyyy-mm-dd)</h1>
</div>

<input type="text" class="noob" size="20px" name="month" value="">
<input type="submit" class="btn" name="submit" value="Enter">
</center>
</form>

<center>
  <h1>All the Stall Transaction From Selected Stall</h1>

  <!--display in html table-->
  <table border="1" style="text-align:center" cellpadding="10px">
    <tr bgcolor= grey>
      <th>ID</th>&nbsp;&nbsp;
      <th>Date and Time</th>&nbsp;&nbsp;
      <th>Quantity</th>&nbsp;&nbsp;
      <th>Amount</th>&nbsp;&nbsp;
      <th>Stall ID</th>&nbsp;&nbsp;
      <th>Total Amount</th>&nbsp;&nbsp;

    </tr>

</center>
</body>
</html>
<?php
$errors=array();
    include("conn.php");
    $name="";
    $month="";
    $total=0;
    if(isset($_POST['submit'])){
    $name = $_POST['id'];
    $month = $_POST['month'];

    //$query = "SELECT * FROM employees
    if (empty($name)) {die("<script>alert('Stall ID required!');</script>");
    echo "<script> window.location.assign('financeviewreport.php'); </script>";}

if (count($errors) == 0) {
   // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";

$result = mysqli_query($con, "SELECT * FROM transaction
    WHERE stall_id LIKE '%{$name}%' and trans_datetime LIKE '%{$month}%'");

while ($rows = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>".$rows['trans_id']."</td>";
  echo "<td>".$rows['trans_datetime']."</td>";
  echo "<td>".$rows['trans_quantity']."</td>";
  echo "<td>".$rows['trans_amount']."</td>";
  echo "<td>".$rows['stall_id']."</td>";
  echo "<td>".$total = $total+$rows['trans_amount']."</td>";
  echo "</tr>";
}
}
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
