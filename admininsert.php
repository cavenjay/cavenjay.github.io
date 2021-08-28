<?php

include("conn.php");

$sql = "INSERT INTO admin (adminname, adminemail, adminpass)

VALUES

('$_POST[adminname]', '$_POST[adminemail]', '$_POST[adminpass]')";

if(!mysqli_query($con, $sql)) {
	die('Error: ' . mysqli_error($con));
}

echo '<script>alert("1 record added!");
window.location.href= "adminview.php";
</script>';

mysqli_close($con);
?>
