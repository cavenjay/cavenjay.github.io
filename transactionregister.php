
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Welcome to APU Meal System </title>			<!-- Title of the tabs -->
<link href="css/cashier.css" rel="stylesheet" type="text/css" />				<!-- linking the page with this stylesheet css -->
</head>
<body style="background-color:lightblue">
  <div>
    <img src="IMAGES/food.png" width="250" height="200" align="left">
  </div>
  <div id="wordabovenav">
    <h2 style="font-size: 80px;">Cashier System</h2>
  </div>
  <div class="topnav">
    <a href="transactionregister.php"target=""><u>Cashier</u></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="stallviewtransaction.php"target=""><u>View Transactions</u></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="stallmanagefood.html"target=""><u>Manage Food</u></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="default.html"target=""><u>Logout</u></a>
  </div>
<!--------------------------------------- seperate parts------------------------------------------------->
<?php include('transactionserver.php') ?>

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
      <h1>Food Name / ID</h1>
    </div>
  <input type="text" class="noob" size="50px" name="fname" value="">

    <!--display in html table-->
    <center>
    <table class="table" border="1" style="text-align:center" cellpadding="10px">
      <tr bgcolor= lightblue>
        <th>Food ID</th>&nbsp;&nbsp;
        <th>Food Name</th>&nbsp;&nbsp;
      </tr>

  </body>
  </html>
  <?php

      include("conn.php");
      //$query = "SELECT * FROM employees
     // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";

  $result = mysqli_query($con, "SELECT * FROM food
      WHERE stall_id ='".$_SESSION['id']."'");

  while ($rows = mysqli_fetch_array($result))
  {
    echo "<tr>";
    echo "<td>".$rows['food_id']."</td>";
    echo "<td>".$rows['foodname']."</td>";
    echo "</tr>";
  }
      ?>
    </table>
  </center>


  <div class="head2">
    <h1>Quantity</h1>
  </div>
<input type="text" class="noob" size="50px" name="quantity" value="">
  <div class="head2">
    <h1>Customer ID</h1>
  </div>
  <center>
  <input type="text" class="noob" size="50px" name="id" value="">
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
      $fname="";
      $id="";
      $quantity="";
      $errors= array();
      if(isset($_POST['submit'])){
      //$fname = $_POST['fname'];
      //$id = $_POST['id'];
      //$quantity = $_POST['quantity'];
      $fname = mysqli_real_escape_string($con, $_POST['fname']);
      $id = mysqli_real_escape_string($con, $_POST['id']);
      $quantity = mysqli_real_escape_string($con, $_POST['quantity']);
      //$query = "SELECT * FROM employees
     // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";
     if (empty($fname)) { array_push($errors, "Food Name / ID is required"); }
     if (empty($quantity)) { array_push($errors, "Quantity is required"); }
     if (empty($id)) { array_push($errors, "ID is required"); }
if (count($errors) == 0) {
  $result = mysqli_query($con, "SELECT * FROM food
      WHERE foodname LIKE '%{$fname}%' OR food_id LIKE '%{$fname}%'");

  $idresult = mysqli_query($con, "SELECT * FROM customer
      WHERE customer_id LIKE '%{$id}%' OR customername LIKE '%{$id}%'");

  while ($rows = mysqli_fetch_array($result))
  while ($row = mysqli_fetch_array($idresult))
  {

  ?>
  <form method="post" action="transactionregister.php">
  	<?php include('errors.php'); ?>
    <div class="input-group">
  	  <label>Customer ID</label>
  	  <input type="text" name="cid" value="<?php echo $row['customer_id']; ?>" readonly>
  	</div>
    <div class="input-group">
  	  <label>Customer Name</label>
  	  <input type="text" name="cname" value="<?php echo $row['customername']; ?>" readonly>
  	</div>
    <div class="input-group">
  	  <label>Customer Balance</label>
  	  <input type="number" name="cusamount" value="<?php echo $row['customeramount']; ?>" readonly>
  	</div>
    <div class="input-group">
  	  <label>Food ID</label>
  	  <input type="number" name="fid" value="<?php echo $rows['food_id']; ?>" readonly>
  	</div>
    <div class="input-group">
  	  <label>Food Name</label>
  	  <input type="text" name="fname" value="<?php echo $rows['foodname']; ?>" readonly>
  	</div>
  	<div class="input-group">
  	  <label>Amount each</label>
  	  <input type="number" name="amounteach" value="<?php echo $rows['foodprice']; ?>" readonly>
  	</div>
    <div class="input-group">
  	  <label>Quantity</label>
  	  <input type="number" name="quantity" value="<?php echo $quantity ?>" readonly>
  	</div>
    <div class="input-group">
  	  <label>Total Amount</label>
  	  <input type="number" name="totalamount" value="<?php $subtotal = $rows['foodprice'] * $quantity; echo $subtotal;?>" readonly>
  	</div>
    <div class="input-group">
  	  <label>Stall ID</label>
  	  <input type="number" name="sid" value="<?php echo $rows['stall_id']; ?>" readonly>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_trans">Enter</button>
      <a href="transactionregister.php" target="" class="btn" name="backbut">Cancel</a>
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

echo "";
} else {
echo "<script type= 'text/javascript'>alert('Error! Fill in the blanks!');</script>";
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
