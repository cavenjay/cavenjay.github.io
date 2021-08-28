<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Welcome to APU Meal System </title>			<!-- Title of the tabs -->
<link href="css/mainpage.css" rel="stylesheet" type="text/css" />				<!-- linking the page with this stylesheet css -->
</head>
<body style="background-color:lightblue">
  <div>
    <img src="IMAGES/food.png" width="250" height="200" align="left">
  </div>
  <div id="wordabovenav">
    <h2 style="font-size: 80px;">REFUND</h2>
  </div>
  <div class="topnav">
    <a href="financeviewtransaction.php"target=""><u>View Transactions</u></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="financeviewreport.php"target=""><u>View Reports</u></a>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="financetopup.php"target=""><u>TopUp</u></a>
    <a href="financerefund.php"target=""><u>Refund</u></a>
    <a href="default.html"target=""><u>Logout</u></a>
  </div>
<!--------------------------------------- seperate parts------------------------------------------------->
<?php include('financerefundserver.php') ?>

<!DOCTYPE html>

<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="register.css">
</head>

  <div class="head">
  	<h3>Enter Details</h3>
  </div>
  <form action="" method="post">
    <div class="head2">
      <h1>Customer ID</h1>
    </div>
    <center>
  <input type="text" class="noob" size="50px" name="noob" value="">
  <input type="submit" class="btn"  name="submit" value="Enter">
  </center>
  </form>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>



  <?php
      include("conn.php");
      $name="";
      if(isset($_POST['submit'])){
      $name = $_POST['noob'];
      //$query = "SELECT * FROM employees
     // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";

  $result = mysqli_query($con, "SELECT * FROM customer
      WHERE customer_id LIKE '%{$name}%' OR customername LIKE '%{$name}%'");

  while ($rows = mysqli_fetch_array($result))
  {

  ?>
  <form method="post" action="financerefund.php">
  	<?php include('errors.php'); ?>
    <div class="input-group">
  	  <label>Customer ID</label>
  	  <input type="number" name="cid" value="<?php echo $rows['customer_id']; ?>" readonly>
  	</div>
  	<div class="input-group">
  	  <label>Account Balance</label>
  	  <input type="number" name="amount" value="<?php echo $rows['customeramount']; ?>" readonly>
  	</div>
  	<div class="input-group">
  	  <label>Refund Amount</label>
  	  <input type="number" name="refund" value="">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_trans">Enter</button>
      <a href="financerefund.php" target="" class="btn" name="backbut">Cancel</a>
    </div>

  </form>
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


  <?php
}
}
?>
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
