<?php
session_start();

// initializing variables
$amount = "";
$refund    = "";
$total  ="";
$cid ="";
$name ="ReFund";
$date = date('Y-m-d H:i:s');
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'mealdebit');

// REGISTER USER
if (isset($_POST['reg_trans'])) {
  // receive all input values from the form
  $amount = mysqli_real_escape_string($db, $_POST['amount']);
  $refund = mysqli_real_escape_string($db, $_POST['refund']);
  $cid = mysqli_real_escape_string($db, $_POST['cid']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($amount)) { array_push($errors, "Amount is required"); }
  if (empty($cid)) { array_push($errors, "ID is required"); }
  if (empty($refund)) { die("<script>alert('Refund Amount required!');</script>");
  echo "<script> window.location.assign('financetopup.php'); </script>";}


  $total=($amount-$refund);
  $totalfinal=($total>=0);
  if($total<0) { die("<script>alert('REFUND INVALID!');</script>");
  echo "<script> window.location.assign('financetopup.php'); </script>";}


  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $update ="UPDATE customer SET customeramount = '$totalfinal'WHERE customer_id = '$cid'";

    $query = "INSERT INTO transactiontopfund (transtop_datetime, transtop_name, transtop_amount, customer_id)
          VALUES('$date', '$name', '$refund', '$cid')";
          if ($db->query($query) === TRUE) {

    //$update_run =mysqli_query($con, $update);
    mysqli_query($db, $update);
    if(mysqli_affected_rows($db) <= 0){
        die("<script>alert('Refund Unsuccessful!');</script>");
        echo "<script> window.location.assign('financerefund.php'); </script>";
    }else{
        echo "<script> alert('Refund Successful!'); </script>";
    echo "<script> window.location.assign('financerefund.php'); </script>";
    }




}
}
}
?>
