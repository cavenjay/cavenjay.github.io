<?php
    include("conn.php");
if(isset($_POST['update2'])){

        $uid = $_POST['uid'];
        $username2 = $_POST['name1'];
        $email2 = $_POST['email1'];
        $password2 = $_POST['password1'];


        $password3 = md5($password2);

        $update ="UPDATE stall SET stallname = '$username2',
                                    stallemail = '$email2',
                                    stallpass = '$password3'

                            WHERE   stall_id = '$uid'";
        //$update_run =mysqli_query($con, $update);
        mysqli_query($con, $update);
        if(mysqli_affected_rows($con) <= 0){
            die("<script>alert('cannot update data!');</script>");
            echo "<script> window.location.assign('stalledit.php'); </script>";
        }else{
            echo "<script> alert('Data successfully updated!'); </script>";
        echo "<script> window.location.assign('stallview.php'); </script>";
        }
}
?>
