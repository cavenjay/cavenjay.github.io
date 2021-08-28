<?php
    include("conn.php");
if(isset($_POST['update2'])){

        $uid = $_POST['uid'];
        $username = $_POST['name'];
        $email = $_POST['email'];
        $stall = $_POST['stall'];




        $update ="UPDATE food SET foodname = '$username',
                                    foodprice = '$email',
                                    stall_id = '$stall'
                            WHERE   food_id = '$uid'";
        //$update_run =mysqli_query($con, $update);
        mysqli_query($con, $update);
        if(mysqli_affected_rows($con) <= 0){
            die("<script>alert('cannot update data!');</script>");
            echo "<script> window.location.assign('foodview.php'); </script>";
        }else{
            echo "<script> alert('Data successfully updated!'); </script>";
        echo "<script> window.location.assign('foodview.php'); </script>";
        }
}
?>
