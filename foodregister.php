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
    <h2 style="font-size: 80px;">ADD FOOD</h2>
  </div>
  <div class="topnav">
    <a href="transactionregister.php"target=""><u>Cashier</u></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="stallviewtransaction.php"target=""><u>View Transactions</u></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="stallmanagefood.html"target=""><u>Manage Food</u></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="default.html"target=""><u>Logout</u></a>
  </div>
<!--------------------------------------- seperate parts------------------------------------------------->
<?php include('foodserver.php') ?>

<!DOCTYPE html>

<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="register.css">
</head>

  <div class="head">
  	<h3>Enter Details</h3>
  </div>

  <form method="post" action="foodregister.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Food Name</label>
  	  <input type="text" name="name" value="<?php echo $foodname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Food Price</label>
  	  <input type="number" name="price" value="<?php echo $foodprice; ?>">
  	</div>
    <div class="input-group">
  	  <label>Stall ID</label>
  	  <input type="number" name="stall_id" value="<?php echo $stall_id; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_trans">Enter</button>
      <a href="stallmanagefood.html" target="" class="btn" name="backbut">Back</a>
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
