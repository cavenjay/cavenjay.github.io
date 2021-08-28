<?php
session_start();

// initializing variables
$amount = "";
$topup    = "";
$total  ="";
$cid ="";
$name ="Top Up";
$date = date('Y-m-d H:i:s');
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'mealdebit');

// REGISTER USER
if (isset($_POST['reg_trans'])) {
  // receive all input values from the form
  $amount = mysqli_real_escape_string($db, $_POST['amount']);
  $topup = mysqli_real_escape_string($db, $_POST['topup']);
  $cid = mysqli_real_escape_string($db, $_POST['cid']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($amount)) { array_push($errors, "Amount is required"); }
  if (empty($cid)) { array_push($errors, "ID is required"); }
  if (empty($topup)) { die("<script>alert('Top Up Amount required!');</script>");
  echo "<script> window.location.assign('financetopup.php'); </script>";}


  $total=($amount+$topup);


  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $update ="UPDATE customer SET customeramount = '$total' WHERE customer_id = '$cid'";

    $query = "INSERT INTO transactiontopfund (transtop_datetime, transtop_name, transtop_amount, customer_id)
          VALUES('$date', '$name', '$topup', '$cid')";
          if ($db->query($query) === TRUE) {

    //$update_run =mysqli_query($con, $update);
    mysqli_query($db, $update);
    if(mysqli_affected_rows($db) <= 0){
        die("<script>alert('Top Up Unsuccessful!');</script>");
        echo "<script> window.location.assign('financetopup.php'); </script>";
    }else{
        echo "<script> alert('Top Up Successful!'); </script>";
    echo "<script> window.location.assign('financetopup.php'); </script>";
    }
}



}
}

?>
