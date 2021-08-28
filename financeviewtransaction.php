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
    <h2 style="font-size: 80px;">Transactions</h2>
  </div>
  <div class="topnav">
    <a href="financeviewtransaction.php"target=""><u>View Transactions</u></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="financeviewreport.php"target=""><u>View Reports</u></a>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="financetopup.php"target=""><u>TopUp</u></a>
    <a href="financerefund.php"target=""><u>Refund</u></a>
    <a href="default.html"target=""><u>Logout</u></a>
  </div>

<!--------------------------------------- seperate parts------------------------------------------------->
<body>
  <center>
    <h1>Transaction Details</h1>

    <!--display in html table-->
    <table border="5" style="text-align:center" cellpadding="10px">
      <tr bgcolor=lightblue>
        <th>Transaction ID</th>
        <th>Transaction Date and Time</th>
        <th>Quantity</th>
        <th>Transaction Amount</th>
        <th>Stall ID</th>
        <th>Food ID</th>
        <th>Customer ID</th>
      </tr>

  </center>
</body>
</html>
<?php
      include("conn.php"); //add connection to the php ldap_control_paged_result
      $sql="Select * from transaction"; //add a new sql query
      $result= mysqli_query($con, $sql); //run the sql query and all the data store in variable result

      if(mysqli_num_rows($result)<=0) //if no result, then run the die() code
      {
          die("<script>alert('No data from database!');</script>");
      }

      //if got result, extract the dta in $rows[] array (column by column)
      while($rows = mysqli_fetch_array($result))
      {
          echo "<tr>";
          echo "<td>".$rows['trans_id']."</td>";
          echo "<td>".$rows['trans_datetime']."</td>";
          echo "<td>".$rows['trans_quantity']."</td>";
          echo "<td>".$rows['trans_amount']."</td>";
          echo "<td>".$rows['stall_id']."</td>";
          echo "<td>".$rows['food_id']."</td>";
          echo "<td>".$rows['customer_id']."</td>";
          echo "</tr>";
      }
?>
</table></br>

</br>
</br>


<center>
  <h1> TopUp and Refund Transaction Details</h1>

  <!--display in html table-->
  <table border="5" style="text-align:center" cellpadding="10px">
    <tr bgcolor=lightblue>
      <th>Transaction ID</th>
      <th>Transaction Date and Time</th>
      <th>Transaction Name</th>
      <th>Transaction Amount</th>
      <th>Customer ID</th>
    </tr>

</center>
</body>
</html>
<?php
    include("conn.php"); //add connection to the php ldap_control_paged_result
    $sql="Select * from transactiontopfund"; //add a new sql query
    $result= mysqli_query($con, $sql); //run the sql query and all the data store in variable result

    if(mysqli_num_rows($result)<=0) //if no result, then run the die() code
    {
        die("<script>alert('No data from database!');</script>");
    }

    //if got result, extract the dta in $rows[] array (column by column)
    while($rows = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>".$rows['transtop_id']."</td>";
        echo "<td>".$rows['transtop_datetime']."</td>";
        echo "<td>".$rows['transtop_name']."</td>";
        echo "<td>".$rows['transtop_amount']."</td>";
        echo "<td>".$rows['customer_id']."</td>";
        echo "</tr>";
    }
?>
</table></br>

</br>
</br>
</br>
</br>
</br>
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
