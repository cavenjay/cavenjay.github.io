

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
    <h2 style="font-size: 60px;">Please Register</h2>
  </div>

  <!--------------------------------------- seperate parts------------------------------------------------->

<?php include('financeserver.php') ?>

<!DOCTYPE html>

<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="register.css">
</head>

  <div class="head">
  	<h3>Finance Register</h3>
  </div>

  <form method="post" action="financeregister.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
      <a href="adminregisterpage.html" target="" class="btn" name="backbut">Back</a>
    </div>
  </form>

  <!--------------------------------------- seperate parts------------------------------------------------->
  <div class="footer"> <!-- start footer -->
    <p style="text-align:center">
      <img alt="" src="IMAGES/phone.jpg" width="20" height="20" />CONTACT INFORMATION &nbsp;
      <img alt="" src="IMAGES/phone.jpg" width="20" height="20" /> 012-51000939 <br/>
      <img alt="" src="IMAGES/email.png" width="20" height="20" /> wheretogo@gmail.com
    </p>
  </div> <!-- end footer -->
  </body>

  </html>
