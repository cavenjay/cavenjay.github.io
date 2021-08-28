
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
    <h2 style="font-size: 80px;">Manage Food</h2>
  </div>
<div class="topnav">
  <a href="transactionregister.php"target=""><u>Cashier</u></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="stallviewtransaction.php"target=""><u>View Transactions</u></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="stallmanagefood.html"target=""><u>Manage Food</u></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="default.html"target=""><u>Logout</u></a>
</div>
<!--------------------------------------- seperate parts------------------------------------------------->


<center>
  <h1>Food Information</h1>

  <!--display in html table-->
  <table border="1" style="text-align:center" cellpadding="10px">
    <tr bgcolor= grey>
      <th>Food ID</th>&nbsp;&nbsp;
      <th>Food Name</th>&nbsp;&nbsp;
      <th>Food Price</th>&nbsp;&nbsp;
      <th>Stall ID</th>&nbsp;&nbsp;
      <th>Edit</th>&nbsp;&nbsp;
      <th>Delete</th>&nbsp;&nbsp;
    </tr>

</center>
</body>
</html>
<?php
    session_start();
    include("conn.php");

   // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";

$result = mysqli_query($con, "SELECT * FROM food
    WHERE stall_id ='".$_SESSION['id']."'");

while ($rows = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>".$rows['food_id']."</td>";
  echo "<td>".$rows['foodname']."</td>";
  echo "<td>".$rows['foodprice']."</td>";
  echo "<td>".$rows['stall_id']."</td>";
  //create 2 buttons (edit button and delete button in each column)
  echo "<td><a href='foodedit.php?food_id=".$rows['food_id']."'><button>Edit</button></a></td>";
  echo "<td><a href='fooddelete.php?food_id=".$rows['food_id']."'><button>Delete</button></a></td>";
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
