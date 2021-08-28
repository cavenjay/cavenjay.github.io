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
    <h2 style="font-size: 80px;">Update/Edit/Delete</h2>
  </div>
  <center>
    <h1>Manager Information</h1>

    <!--display in html table-->
    <table border="1" style="text-align:center" cellpadding="10px">
      <tr bgcolor= grey>
        <th>Stall ID</th>&nbsp;&nbsp;
        <th>Stall Name</th>&nbsp;&nbsp;
        <th>Stall Email</th>&nbsp;&nbsp;
        <th>Stall Password</th>&nbsp;&nbsp;
        <th>Edit</th>&nbsp;&nbsp;
      </tr>

  </center>
</body>
</html>
<?php
      include("conn.php"); //add connection to the php ldap_control_paged_result
      $sql="Select * from stall"; //add a new sql query
      $result= mysqli_query($con, $sql); //run the sql query and all the data store in variable result

      if(mysqli_num_rows($result)<=0) //if no result, then run the die() code
      {
          die("<script>alert('No data from database!');</script>");
      }

      //if got result, extract the dta in $rows[] array (column by column)
      while($rows = mysqli_fetch_array($result))
      {
          echo "<tr>";
          echo "<td>".$rows['stall_id']."</td>";
          echo "<td>".$rows['stallname']."</td>";
          echo "<td>".$rows['stallemail']."</td>";
          echo "<td>".$rows['stallpass']."</td>";
          //create 2 buttons (edit button and delete button in each column)
          echo "<td><a href='stalledit.php?stall_id=".$rows['stall_id']."'><button>Edit</button></a></td>";
          echo "</tr>";
      }
?>
</table></br>
<div>
  <a href="adminviewuser.html" target="" class="btn" name="backbut">Back</a>
</div>
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
