

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Events</title>
<link href="CSS/login.css" rel="stylesheet" type="text/css" />				<!-- linking the page with this stylesheet css -->
</head>

<body style="background-color:lightblue">
  <div>
    <img src="IMAGES/food.png" width="250" height="200" align="left">
  </div>

  <div id="wordabovenav">
    <h2 style="font-size: 60px;">Please Login To The Meal Debit System</h2>
  </div>

  <!--------------------------------------- seperate parts------------------------------------------------->

<?php include('financeserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Finance Login</h2>
  </div>

  <form method="post" action="financelogin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div><br/>
    <div>
      <a href="default.html" target="" class="btn" name="backbut">Back</a>
    </div>
  </form>
</body>
</html>

<!--------------------------------------- seperate parts------------------------------------------------->
<div class="footer"> <!-- start footer -->
  <p style="text-align:center">
    <img alt="" src="IMAGES/phone.jpg" width="20" height="20" />CONTACT INFORMATION <br/>
    <img alt="" src="IMAGES/phone.jpg" width="20" height="20" /> 012-51000939 <br/>
    <img alt="" src="IMAGES/email.png" width="20" height="20" /> mealdebit@gmail.com
  </p>
</div> <!-- end footer -->
</body>

</html>
