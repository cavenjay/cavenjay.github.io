<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$ID       = "";
$amount       = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'mealdebit');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $ID = mysqli_real_escape_string($db, $_POST['ID']);
  $amount = mysqli_real_escape_string($db, $_POST['amount']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($ID)) { array_push($errors, "ID is required"); }
  if (empty($amount)) { array_push($errors, "Amount is required, Customer must Top Up!"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $sql_u = "SELECT * FROM customer WHERE customername='$username'";
    	$sql_e = "SELECT * FROM customer WHERE customeremail='$email'";
    	$res_u = mysqli_query($db, $sql_u);
    	$res_e = mysqli_query($db, $sql_e);

    	if (mysqli_num_rows($res_u) > 0) {
    	  echo "<script type= 'text/javascript'>alert('Name Taken');</script>";
    	}else if(mysqli_num_rows($res_e) > 0){
    	  echo "<script type= 'text/javascript'>alert('Email Taken');</script>";
    	}else{


  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO customer (customer_id, customername, customerpass, customeremail, customeramount)
  			  VALUES('$ID', '$username', '$password', '$email', '$amount')";
          if ($db->query($query) === TRUE) {
      echo "<script type= 'text/javascript'>alert('SUCCESSFULLY CREATED');</script>";
      } else {
      echo "<script type= 'text/javascript'>alert('Error!');</script>";
      }
  }
}
}

// ...
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "ID is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM customer WHERE customer_id='$username' AND customerpass='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
      $_SESSION['password'] = $password;
  	  $_SESSION['id'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: customerprofile.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
