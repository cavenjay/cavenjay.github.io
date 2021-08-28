<?php
session_start();

// initializing variables
$foodname = "";
$foodprice    = "";
$stall_id    = "";


$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'mealdebit');

// REGISTER USER
if (isset($_POST['reg_trans'])) {
  // receive all input values from the form
  $foodname = mysqli_real_escape_string($db, $_POST['name']);
  $foodprice = mysqli_real_escape_string($db, $_POST['price']);
  $stall_id = mysqli_real_escape_string($db, $_POST['stall_id']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($foodname)) { array_push($errors, "Food Name is required"); }
  if (empty($foodprice)) { array_push($errors, "Food price is required"); }
  if (empty($stall_id)) { array_push($errors, "Stall ID is required"); }


  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO food (foodname, foodprice, stall_id)
  			  VALUES('$foodname', '$foodprice', '$stall_id')";
          if ($db->query($query) === TRUE) {
echo "<script type= 'text/javascript'>alert('FOOD ADDED!');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error!');</script>";
}
}

}
?>
