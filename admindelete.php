<?php
include("conn.php");

//intval - get the integer value of a variable
$admin_id=intval($_GET['admin_id']);

mysqli_query($con,"DELETE FROM admin WHERE admin_id=$admin_id");

//if unable to execute the query, then give alert message
if(mysqli_affected_rows($con)<=0)
{
    echo "<script>alert('Unable to delete data!');";
    die("window.location.href='adminview.php';</script>");
}

//if able to execute the delete query... display success alert message.
mysqli_close($con); //close database connection

echo "<script>alert('Data deleted!');</script>";
echo "<script>window.location.href='adminview.php';</script>";
?>
