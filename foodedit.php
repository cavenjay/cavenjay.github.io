<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Welcome to APU Meal System </title>			<!-- Title of the tabs -->
<link href="css/edit.css" rel="stylesheet" type="text/css" />				<!-- linking the page with this stylesheet css -->
</head>
<body style="background-color:lightblue">
  <div>
    <img src="IMAGES/food.png" width="250" height="200" align="left">
  </div>
  <div id="wordabovenav">
    <h2 style="font-size: 80px;">Edit Food</h2>
  </div>
<?php
    // get id from url
    //connect to database
    include ("conn.php");
    $uid = $_GET['food_id'];
    //write the sql query
    $sql = "Select * FROM food WHERE food_id = $uid";
    //execute the sql query
    $result=mysqli_query($con, $sql);
?>
<?php
    //get the data from the database and display in HTML Form
    if($rows=mysqli_fetch_array($result))
    {

    //build the form and use echo to display the relevance data inside the HTML form
?>

<form method="post" action="foodupdate.php">
  <table style="text-align:center">
    <tr><th width="300px">Food ID</th>
      <td><input type="text" name="uid" value="<?php echo $rows['food_id']  ?>" readonly/></td>
    </tr>
<tr><th>Food Name:</th><td width="300px">
  <input type="text" name="name" value="<?php echo $rows['foodname']?>"required="required"/>
</td>
</tr>
<tr><th>Food Price:</th><td>
  <input name="email" required="required" value="<?php echo $rows['foodprice']?>"/>
</td>
</tr>
<tr><th>Stall ID:</th><td>
  <input name="stall" required="required" value="<?php echo $rows['stall_id']?>"/>
</td>
</tr>



<!--add a update button for this page-->
<tr><td colspan="2">
</br>
<center>
  <input name="update2" type="submit" class="btn" value="Update"/> &nbsp;&nbsp;
  <input type="submit"value="Back to Previous Page" class="btn" formaction="foodview.php"/>
</center>
</td>
</tr>
</table>
</form>

<?php
}
else {
  die("<script>alert('Error!');
  window.location.href='foodview.php'</script>");
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
