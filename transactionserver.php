<?php
session_start();

// initializing variables
$cusamount="";
$totalamount = "";
$quantity = "";
$fid    = "";
$fname  = "";
$cid    = "";
$sid    = "";
$balance ="";
$date = date('Y-m-d H:i:s');
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'mealdebit');

// REGISTER USER
if (isset($_POST['reg_trans'])) {
  // receive all input values from the form
  $totalamount = mysqli_real_escape_string($db, $_POST['totalamount']);
  $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
  $cusamount = mysqli_real_escape_string($db, $_POST['cusamount']);
  $fid = mysqli_real_escape_string($db, $_POST['fid']);
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $cid = mysqli_real_escape_string($db, $_POST['cid']);
  $sid = mysqli_real_escape_string($db, $_POST['sid']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($totalamount)) { array_push($errors, "Amount is required"); }
  if (empty($quantity)) { array_push($errors, "Qunatity is required"); }
  if (empty($fid)) { array_push($errors, "Food ID is required"); }
  if (empty($fname)) { array_push($errors, "Food Name is required"); }
  if (empty($cid)) { array_push($errors, "Customer ID is required"); }
  if (empty($sid)) { array_push($errors, "Stall ID is required"); }


  $balance=($cusamount-$totalamount);
  if($balance<0) { die("<script>alert('BALANCE INVALID!');</script>");
  echo "<script> window.location.assign('transactionregister.php'); </script>";}


  // Finally, update if there are no errors in the form
  if (count($errors) == 0) {
    $update ="UPDATE customer SET customeramount = '$balance' WHERE customer_id = '$cid'";

  	$query = "INSERT INTO transaction (trans_datetime, trans_quantity, trans_amount, customer_id, food_id, foodname, stall_id)
  			  VALUES('$date', '$quantity', '$totalamount', '$cid', '$fid','$fname', '$sid')";
          if ($db->query($query) === TRUE) {mysqli_query($db, $update);
          if(mysqli_affected_rows($db) <= 0){
              die("<script>alert('Transaction Unsuccessful!');</script>");
              echo "<script> window.location.assign('transactionregister.php'); </script>";
          }else{
              echo "<script> alert('Transaction Successful!'); </script>";
          echo "<script> window.location.assign('transactionregister.php'); </script>";
          }
}
}
}
?>
